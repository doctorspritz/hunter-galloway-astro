// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';
import react from '@astrojs/react';
import { loadEnv } from 'vite';
import astrobook from 'astrobook';

const env = loadEnv(process.env.NODE_ENV || 'production', process.cwd(), '');

// https://astro.build/config
export default defineConfig({
  site: env.PUBLIC_SITE_URL || 'http://localhost:4321',
  
  vite: {
    plugins: [tailwindcss()]
  },

  integrations: [
    react(),
    astrobook({
      subpath: '/astrobook',
      directory: 'src/components'
    }),
    // Storyblok will be initialized separately
  ],
  
  output: 'static',
});