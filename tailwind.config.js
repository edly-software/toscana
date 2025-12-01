const animate = require("tailwindcss-animate");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: ["class"],
    safelist: ["dark"],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.{ts,tsx,vue}",
    ],

    theme: {
        fontFamily: {
            inter: ["Inter", "Arial", "sans-serif"],
            serif: ["Georgia", "Cambria", "Times New Roman", "serif"],
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "1.5rem",
                lg: "2rem",
            },
            screens: {
                "2xl": "1400px",
            },
        },
        extend: {
            colors: {
                border: "hsl(var(--border))",
                input: "hsl(var(--input))",
                ring: "hsl(var(--ring))",
                background: "hsl(var(--background))",
                foreground: "hsl(var(--foreground))",
                primary: {
                    DEFAULT: "hsl(var(--primary))",
                    foreground: "hsl(var(--primary-foreground))",
                },
                secondary: {
                    DEFAULT: "hsl(var(--secondary))",
                    foreground: "hsl(var(--secondary-foreground))",
                },
                destructive: {
                    DEFAULT: "hsl(var(--destructive))",
                    foreground: "hsl(var(--destructive-foreground))",
                },
                muted: {
                    DEFAULT: "hsl(var(--muted))",
                    foreground: "hsl(var(--muted-foreground))",
                },
                accent: {
                    DEFAULT: "hsl(var(--accent))",
                    foreground: "hsl(var(--accent-foreground))",
                },
                popover: {
                    DEFAULT: "hsl(var(--popover))",
                    foreground: "hsl(var(--popover-foreground))",
                },
                card: {
                    DEFAULT: "hsl(var(--card))",
                    foreground: "hsl(var(--card-foreground))",
                },
                /* Luxury Color Palette */
                gold: {
                    DEFAULT: "#c9a954",
                    50: "#faf8f0",
                    100: "#f5f0dc",
                    200: "#ece1b9",
                    300: "#e0cc8d",
                    400: "#d4b45f",
                    500: "#c9a954",
                    600: "#b08f3a",
                    700: "#8b7435",
                    800: "#6f5c30",
                    900: "#5a4b29",
                },
                champagne: "#f5efe4",
                ivory: "#faf9f6",
                charcoal: {
                    DEFAULT: "#1a1a1f",
                    50: "#f6f6f7",
                    100: "#e2e2e4",
                    200: "#c5c5c9",
                    300: "#a1a1a7",
                    400: "#7c7c85",
                    500: "#62626a",
                    600: "#4d4d54",
                    700: "#3f3f44",
                    800: "#35353a",
                    900: "#1a1a1f",
                    950: "#0d0d0f",
                },
                warmblack: "#141210",
            },
            borderRadius: {
                xl: "calc(var(--radius) + 4px)",
                lg: "var(--radius)",
                md: "calc(var(--radius) - 2px)",
                sm: "calc(var(--radius) - 4px)",
            },
            keyframes: {
                "accordion-down": {
                    from: { height: 0 },
                    to: { height: "var(--radix-accordion-content-height)" },
                },
                "accordion-up": {
                    from: { height: "var(--radix-accordion-content-height)" },
                    to: { height: 0 },
                },
                "collapsible-down": {
                    from: { height: 0 },
                    to: { height: "var(--radix-collapsible-content-height)" },
                },
                "collapsible-up": {
                    from: { height: "var(--radix-collapsible-content-height)" },
                    to: { height: 0 },
                },
                "float": {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(8px)" },
                },
                "fade-in-up": {
                    "0%": { opacity: 0, transform: "translateY(30px)" },
                    "100%": { opacity: 1, transform: "translateY(0)" },
                },
                "fade-in": {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
                "slide-in-left": {
                    "0%": { opacity: 0, transform: "translateX(-30px)" },
                    "100%": { opacity: 1, transform: "translateX(0)" },
                },
                "slide-in-right": {
                    "0%": { opacity: 0, transform: "translateX(30px)" },
                    "100%": { opacity: 1, transform: "translateX(0)" },
                },
                "scale-in": {
                    "0%": { opacity: 0, transform: "scale(0.95)" },
                    "100%": { opacity: 1, transform: "scale(1)" },
                },
                "shimmer": {
                    "0%": { backgroundPosition: "-200% 0" },
                    "100%": { backgroundPosition: "200% 0" },
                },
                "pulse-soft": {
                    "0%, 100%": { opacity: 1 },
                    "50%": { opacity: 0.7 },
                },
            },
            animation: {
                "accordion-down": "accordion-down 0.2s ease-out",
                "accordion-up": "accordion-up 0.2s ease-out",
                "collapsible-down": "collapsible-down 0.2s ease-in-out",
                "collapsible-up": "collapsible-up 0.2s ease-in-out",
                "float": "float 2.5s ease-in-out infinite",
                "fade-in-up": "fade-in-up 0.8s ease-out forwards",
                "fade-in": "fade-in 0.6s ease-out forwards",
                "slide-in-left": "slide-in-left 0.8s ease-out forwards",
                "slide-in-right": "slide-in-right 0.8s ease-out forwards",
                "scale-in": "scale-in 0.6s ease-out forwards",
                "shimmer": "shimmer 2s linear infinite",
                "pulse-soft": "pulse-soft 3s ease-in-out infinite",
            },
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic": "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
                "gold-gradient": "linear-gradient(135deg, #c9a954 0%, #f0d989 50%, #c9a954 100%)",
                "dark-overlay": "linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.4))",
            },
            boxShadow: {
                "gold": "0 4px 20px -2px rgba(201, 169, 84, 0.25)",
                "gold-lg": "0 10px 40px -4px rgba(201, 169, 84, 0.3)",
                "elegant": "0 20px 40px -12px rgba(0, 0, 0, 0.15)",
                "elegant-lg": "0 30px 60px -15px rgba(0, 0, 0, 0.2)",
            },
            transitionTimingFunction: {
                "elegant": "cubic-bezier(0.25, 0.1, 0.25, 1)",
            },
            letterSpacing: {
                "ultra-wide": "0.25em",
            },
        },
    },
    plugins: [animate],
};
