import { useState, type ReactNode } from 'react';

interface TooltipProps {
  content: string;
  children: ReactNode;
  className?: string;
}

export default function Tooltip({ content, children, className = '' }: TooltipProps) {
  const [isVisible, setIsVisible] = useState(false);

  return (
    <div 
      className={`relative inline-block ${className}`}
      onMouseEnter={() => setIsVisible(true)}
      onMouseLeave={() => setIsVisible(false)}
    >
      {children}
      {isVisible && (
        <div className="absolute z-50 w-80 p-3 text-sm text-white bg-gray-800 rounded-lg shadow-lg -top-2 left-full ml-2 transform -translate-y-full">
          <div className="relative">
            {content}
            {/* Arrow pointing to the trigger */}
            <div className="absolute top-full left-0 transform -translate-x-2 -translate-y-1">
              <div className="w-2 h-2 bg-gray-800 rotate-45"></div>
            </div>
          </div>
        </div>
      )}
    </div>
  );
}