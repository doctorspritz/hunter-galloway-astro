#!/usr/bin/env python3
"""
WordPress to Astro Page Conversion Management Tool
Helps track progress and manage the conversion process
"""

import json
import os
from datetime import datetime
from pathlib import Path

class ConversionManager:
    def __init__(self, tracker_file="PAGE_CONVERSION_TRACKER.json"):
        self.tracker_file = Path(tracker_file)
        self.data = self.load_data()
    
    def load_data(self):
        """Load conversion tracker data"""
        if self.tracker_file.exists():
            with open(self.tracker_file, 'r') as f:
                return json.load(f)
        return {}
    
    def save_data(self):
        """Save conversion tracker data"""
        self.data['lastUpdated'] = datetime.now().strftime("%Y-%m-%d")
        with open(self.tracker_file, 'w') as f:
            json.dump(self.data, f, indent=2)
        print(f"✅ Data saved to {self.tracker_file}")
    
    def update_page_status(self, page_id, status, progress=None, actual_hours=None, notes=None):
        """Update a page's conversion status"""
        if page_id not in self.data.get('pages', {}):
            print(f"❌ Page '{page_id}' not found")
            return
        
        page = self.data['pages'][page_id]
        page['status'] = status
        
        if progress is not None:
            page['progress'] = progress
        if actual_hours is not None:
            page['actualHours'] = actual_hours
        if notes is not None:
            page['notes'] = notes
        
        # Update overall progress
        self.calculate_overall_progress()
        self.save_data()
        print(f"✅ Updated {page_id}: {status} ({page['progress']}%)")
    
    def calculate_overall_progress(self):
        """Calculate overall project progress"""
        pages = self.data.get('pages', {})
        if not pages:
            return
        
        total_progress = sum(page['progress'] for page in pages.values())
        overall_progress = total_progress / len(pages)
        
        completed_pages = sum(1 for page in pages.values() if page['status'] == 'completed')
        in_progress_pages = sum(1 for page in pages.values() if page['status'] == 'in_progress')
        
        self.data['overallProgress'] = round(overall_progress, 1)
        self.data['completedPages'] = completed_pages
        self.data['inProgressPages'] = in_progress_pages
    
    def show_status(self):
        """Display current conversion status"""
        print(f"\n🏗️  {self.data.get('project', 'Project')} Status")
        print(f"📅 Last Updated: {self.data.get('lastUpdated', 'Unknown')}")
        print(f"📊 Overall Progress: {self.data.get('overallProgress', 0)}%")
        print(f"✅ Completed: {self.data.get('completedPages', 0)}/{self.data.get('totalPages', 0)} pages")
        print(f"🔄 In Progress: {self.data.get('inProgressPages', 0)} pages")
        print()
    
    def show_priority_queue(self, priority=None):
        """Show pages by priority"""
        pages = self.data.get('pages', {})
        priorities = ['P0', 'P1', 'P2', 'P3'] if priority is None else [priority]
        
        for p in priorities:
            priority_pages = [(id, page) for id, page in pages.items() if page.get('priority') == p]
            if not priority_pages:
                continue
                
            print(f"\n📋 {p} Priority Pages:")
            for page_id, page in priority_pages:
                status_icon = {
                    'completed': '✅',
                    'in_progress': '🔄', 
                    'not_started': '⏳'
                }.get(page['status'], '❓')
                
                print(f"  {status_icon} {page_id.replace('-', ' ').title()}")
                print(f"     Status: {page['status']} ({page['progress']}%)")
                print(f"     Business Value: {page['businessValue']} | Complexity: {page['complexity']}")
                print(f"     Est: {page['estimatedHours']}h | Actual: {page['actualHours']}h")
                if page.get('notes'):
                    print(f"     Notes: {page['notes']}")
                print()
    
    def show_next_actions(self):
        """Show recommended next actions"""
        pages = self.data.get('pages', {})
        
        # Find highest priority incomplete pages
        next_pages = []
        for priority in ['P0', 'P1', 'P2']:
            priority_pages = [
                (id, page) for id, page in pages.items() 
                if page.get('priority') == priority and page['status'] != 'completed'
            ]
            if priority_pages:
                next_pages.extend(priority_pages[:2])  # Top 2 from each priority
                break
        
        if next_pages:
            print("\n🎯 Recommended Next Actions:")
            for i, (page_id, page) in enumerate(next_pages[:3], 1):
                print(f"  {i}. Start {page_id.replace('-', ' ').title()}")
                print(f"     → {page['businessValue']} business value, {page['complexity']} complexity")
                print(f"     → Estimated {page['estimatedHours']} hours")
                if page.get('componentsNeeded'):
                    print(f"     → Components needed: {', '.join(page['componentsNeeded'][:3])}")
                print()
    
    def add_component(self, page_id, component_name, component_type='needed'):
        """Add a component to a page's requirements"""
        if page_id not in self.data.get('pages', {}):
            print(f"❌ Page '{page_id}' not found")
            return
        
        components_key = 'componentsNeeded' if component_type == 'needed' else 'componentsBuilt'
        if components_key not in self.data['pages'][page_id]:
            self.data['pages'][page_id][components_key] = []
        
        if component_name not in self.data['pages'][page_id][components_key]:
            self.data['pages'][page_id][components_key].append(component_name)
            self.save_data()
            print(f"✅ Added {component_name} to {page_id} {component_type}")
        else:
            print(f"⚠️  {component_name} already exists in {page_id} {component_type}")
    
    def show_components_needed(self):
        """Show all components needed across pages"""
        all_components = set()
        built_components = set()
        
        for page in self.data.get('pages', {}).values():
            all_components.update(page.get('componentsNeeded', []))
            built_components.update(page.get('componentsBuilt', []))
        
        needed_components = all_components - built_components
        
        print(f"\n🔧 Component Status:")
        print(f"✅ Built: {len(built_components)} components")
        print(f"⏳ Still Needed: {len(needed_components)} components")
        
        if needed_components:
            print(f"\n📋 Components to Build:")
            for component in sorted(needed_components):
                # Count how many pages need this component
                usage_count = sum(
                    1 for page in self.data.get('pages', {}).values()
                    if component in page.get('componentsNeeded', [])
                )
                print(f"  • {component} (used by {usage_count} pages)")

def main():
    """Main CLI interface"""
    import sys
    
    manager = ConversionManager()
    
    if len(sys.argv) < 2:
        manager.show_status()
        manager.show_next_actions()
        return
    
    command = sys.argv[1]
    
    if command == "status":
        manager.show_status()
        if len(sys.argv) > 2:
            manager.show_priority_queue(sys.argv[2])
        else:
            manager.show_priority_queue()
    
    elif command == "update" and len(sys.argv) >= 4:
        page_id = sys.argv[2]
        status = sys.argv[3]
        progress = int(sys.argv[4]) if len(sys.argv) > 4 and sys.argv[4].isdigit() else None
        manager.update_page_status(page_id, status, progress)
    
    elif command == "next":
        manager.show_next_actions()
    
    elif command == "components":
        manager.show_components_needed()
    
    elif command == "add-component" and len(sys.argv) >= 4:
        page_id = sys.argv[2]
        component_name = sys.argv[3]
        manager.add_component(page_id, component_name)
    
    else:
        print("Usage:")
        print("  python manage_conversion.py                          # Show status and next actions")
        print("  python manage_conversion.py status [P0|P1|P2|P3]    # Show status by priority")
        print("  python manage_conversion.py update <page> <status> [progress]  # Update page")
        print("  python manage_conversion.py next                     # Show next actions")
        print("  python manage_conversion.py components               # Show component status")
        print("  python manage_conversion.py add-component <page> <component>  # Add component")

if __name__ == "__main__":
    main()