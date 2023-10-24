const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./src/resources/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.indigo,
                secondary: colors.zinc,
                positive: colors.emerald,
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue,
                docs: colors.teal,
            },
        },
    },
    plugins: [],
};
