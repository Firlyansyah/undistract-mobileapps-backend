import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            https: true,
        }),
        tailwindcss(),
    ],

    // Tambahkan ini
    server: {
        https: true,
        host: "0.0.0.0",
        hmr: {
            protocol: "wss",
        },
    },
    preview: {
        https: true,
    },
    base: "https://undistract-mobileapps-backend-production-e9bb.up.railway.app/",
});
