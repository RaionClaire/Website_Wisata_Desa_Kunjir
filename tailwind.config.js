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
    safelist: ["animate-fade1", "animate-fade2", "animate-fade3", "animate-fade4", "animate-fade5"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            animation: {
                fade1: "fade1 50s infinite",
                fade2: "fade2 50s infinite",
                fade3: "fade3 50s infinite",
                fade4: "fade4 50s infinite",
                fade5: "fade5 50s infinite",
                "fade-in": "fade-in 0.8s ease-out both",
                "slide-in-left": "slide-in-left 0.8s ease-out both",
                "slide-in-right": "slide-in-right 0.8s ease-out 0.2s both",
            },
            keyframes: {
                fade1: {
                    "0%": { opacity: "1" },
                    "16%": { opacity: "1" },
                    "20%": { opacity: "0" },
                    "96%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                fade2: {
                    "0%": { opacity: "0" },
                    "16%": { opacity: "0" },
                    "20%": { opacity: "1" },
                    "36%": { opacity: "1" },
                    "40%": { opacity: "0" },
                    "100%": { opacity: "0" },
                },
                fade3: {
                    "0%": { opacity: "0" },
                    "36%": { opacity: "0" },
                    "40%": { opacity: "1" },
                    "56%": { opacity: "1" },
                    "60%": { opacity: "0" },
                    "100%": { opacity: "0" },
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
                fade4: {
                    "0%": { opacity: "0" },
                    "56%": { opacity: "0" },
                    "60%": { opacity: "1" },
                    "76%": { opacity: "1" },
                    "80%": { opacity: "0" },
                    "100%": { opacity: "0" },
                },
                fade5: {
                    "0%": { opacity: "0" },
                    "76%": { opacity: "0" },
                    "80%": { opacity: "1" },
                    "96%": { opacity: "1" },
                    "100%": { opacity: "0" },
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
