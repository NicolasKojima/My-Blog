import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import reactRefresh from '@vitejs/plugin-react-refresh';

export default ({ command }) => {
  const isServe = command === 'serve';

  return defineConfig({
    base: isServe ? '' : '/build/',
    publicDir: 'fake_dir_so_nothing_gets_copied',
    build: {
      manifest: true,
      outDir: 'public/build',
      rollupOptions: {
        input: 'resources/js/app.js',
      },
    },
    plugins: [
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: isServe, // Enable refresh only during development
      }),
      reactRefresh(),
    ],
  });
};
