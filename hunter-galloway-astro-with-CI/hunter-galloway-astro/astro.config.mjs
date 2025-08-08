// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';
import react from '@astrojs/react';
import { loadEnv } from 'vite';

const env = loadEnv(process.env.NODE_ENV || 'production', process.cwd(), '');

// https://astro.build/config
export default defineConfig({
  site: env.PUBLIC_SITE_URL || 'https://huntergalloway.com.au',
  
  vite: {
    plugins: [tailwindcss()]
  },

  integrations: [
    react(),
    // Storyblok will be initialized separately
  ],
  
  output: 'static',
});