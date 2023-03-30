/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}"
    ],
    theme: {
        extend: {
            backgroundImage: {
                "loginBG": "url('./public/images/loginBackground.jpg')",
            },
        },
    },
    plugins: [],
};
