import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./app/Filament/**/*.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: ["animate-fade1", "animate-fade2", "animate-fade3"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            animation: {
                fade1: "fade1 15s infinite",
                fade2: "fade2 15s infinite",
                fade3: "fade3 15s infinite",
                "fade-in": "fade-in 0.8s ease-out both",
                "slide-in-left": "slide-in-left 0.8s ease-out both",
                "slide-in-right": "slide-in-right 0.8s ease-out 0.2s both",
            },
            keyframes: {
                fade1: {
                    "0%": { opacity: "1" },
                    "33%": { opacity: "1" },
                    "36%": { opacity: "0" },
                    "100%": { opacity: "0" },
                },
                fade2: {
                    "0%": { opacity: "0" },
                    "33%": { opacity: "0" },
                    "36%": { opacity: "1" },
                    "66%": { opacity: "1" },
                    "69%": { opacity: "0" },
                    "100%": { opacity: "0" },
                },
                fade3: {
                    "0%": { opacity: "0" },
                    "66%": { opacity: "0" },
                    "69%": { opacity: "1" },
                    "97%": { opacity: "1" },
                    "100%": { opacity: "1" },
                },
                "fade-in": {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                "slide-in-left": {
                    "0%": { opacity: "0", transform: "translateX(-50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
                "slide-in-right": {
                    "0%": { opacity: "0", transform: "translateX(50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
            },

            backgroundSize: {
                "pattern-md": "400px 400px",
            },
            boxShadow: {
                "emerald-lg": "0 20px 40px rgba(16,185,129,0.12)",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
