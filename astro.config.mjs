// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';
import react from '@astrojs/react';
import astrobook from 'astrobook';

// Avoid importing 'vite' in config on CI (Netlify) to prevent missing direct dep resolution

// https://astro.build/config
const enableAstrobook = process.env.ASTROBOOK === 'true' || process.env.NODE_ENV === 'development';

export default defineConfig({
  site: process.env.PUBLIC_SITE_URL || 'http://localhost:4321',
  
  vite: {
    plugins: [tailwindcss()]
  },

  integrations: [
    react(),
    ...(enableAstrobook
      ? [
          astrobook({
            subpath: '/astrobook',
            directory: 'src/components',
          }),
        ]
      : []),
    // Storyblok will be initialized separately
  ],
  
  output: 'static',
});