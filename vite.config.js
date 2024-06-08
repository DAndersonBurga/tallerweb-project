import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/service.css',
                'resources/js/app.js',
                '/resources/js/swiper.js',
                '/resources/js/index.js'
            ],
            refresh: true,
        }),
    ],
});
