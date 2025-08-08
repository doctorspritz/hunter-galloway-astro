import os
import re
import json
from pathlib import Path

theme_path = Path("/Users/simonheikkila/Documents/hunter-galloway/WP-FILES")  # WordPress theme files

page_map = {}

# Regex patterns
template_name_pattern = re.compile(r"Template\s+name:\s*(.+)", re.IGNORECASE)
get_template_part_pattern = re.compile(r"get_template_part\(\s*['\"]([^'\"]+)['\"]")
section_class_pattern = re.compile(r"<section[^>]+class=[\"']([^\"']+)[\"']", re.IGNORECASE)

# Walk through PHP files
for php_file in theme_path.rglob("*.php"):
    php_content = php_file.read_text(errors="ignore")

    # Look for template name
    template_match = template_name_pattern.search(php_content)
    if template_match:
        template_name = template_match.group(1).strip()
        slug = template_name.lower().replace(" ", "-")

        if slug not in page_map:
            page_map[slug] = {"php": [], "css": [], "sections": []}

        page_map[slug]["php"].append(str(php_file.relative_to(theme_path)))

        # Find template parts
        for match in get_template_part_pattern.findall(php_content):
            page_map[slug]["php"].append(f"{match}.php")

        # Find section classes
        for section_classes in section_class_pattern.findall(php_content):
            for cls in section_classes.split():
                if cls not in page_map[slug]["sections"]:
                    page_map[slug]["sections"].append(cls)

# Now find CSS/SCSS containing those classes
for slug, data in page_map.items():
    for cls in data["sections"]:
        for css_file in theme_path.rglob("*.[sc]*ss"):
            try:
                css_content = css_file.read_text(errors="ignore")
                if f".{cls}" in css_content:
                    rel_path = str(css_file.relative_to(theme_path))
                    if rel_path not in data["css"]:
                        data["css"].append(rel_path)
            except:
                continue

# Save JSON map
output_file = Path("/Users/simonheikkila/Documents/hunter-galloway/wp_page_map.json")
with open(output_file, "w") as f:
    json.dump(page_map, f, indent=2)

print(f"Page map written to {output_file}")
print(f"Found {len(page_map)} page templates")
