<div>
    <x-docs::title id="colors" title="Colors" />

    <x-docs::text>
        Tailor the visual aesthetics of your WireUI components to your liking by customizing the default color scheme.
        This includes fine-tuning colors for various elements like Notifications, dialogs, inputs, selects, buttons, and
        more.
        <br><br>
        All it takes is extending the Tailwind Colors configuration within your
        <x-docs::mark>tailwind.config.js</x-docs::mark> file. By adding your preferred color choices, you can achieve a
        unique and cohesive look that aligns perfectly with your design preferences and branding.
    </x-docs::text>

    <x-docs::code.block class="!mt-6" language="js">
        @verbatim
            const colors = require('tailwindcss/colors')

            module.exports = {
                ...
                theme: {
                    extend: {
                        colors: {
                            ...
                            primary: colors.indigo,
                            secondary: colors.gray,
                            positive: colors.emerald,
                            negative: colors.red,
                            warning: colors.amber,
                            info: colors.blue
                        },
                    },
                },
                ...
            }
        @endverbatim
    </x-docs::code.block>
</div>
