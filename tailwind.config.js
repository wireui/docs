const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./src/resources/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.teal,
                secondary: colors.zinc,
                positive: colors.emerald,
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue,
            },
        },
    },
    plugins: [],
};
