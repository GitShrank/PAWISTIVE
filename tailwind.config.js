import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                tenant1: {
                    DEFAULT: "#1E40AF",
                    dark: "#1E3A8A",
                },
                tenant2: {
                    DEFAULT: "#DC2626",
                    dark: "#B91C1C",
                },
            },
        },
    },

    plugins: [forms],
};
