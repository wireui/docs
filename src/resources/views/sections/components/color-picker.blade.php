<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#color-picker-simple" label="Color Picker Simple" />

            <x-docs::summary.header href="#default-colors" label="Default Colors" />

            <x-docs::summary.header href="#default-colors" label="Default Colors" />

            <x-docs::summary.header href="#tailwind-colors" label="Tailwind Colors" />

            <x-docs::summary.header href="#custom-colors" label="Custom Colors" />

            <x-docs::summary.header href="#color-name-as-value" label="Color name as value" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="color-picker" title="Color Picker" />

    <x-docs::text>
        The Color Picker component provides a versatile and user-friendly tool for selecting and customizing colors
        within your web applications. It seamlessly integrates with Tailwind CSS, offering default color options that
        you can easily use. However, you also have the flexibility to tailor these colors to your specific preferences,
        either by generating new color variations using code or utilizing the colors defined in your Tailwind CSS
        configuration. This component allows you to specify colors for various components, whether with or without
        labels, and provides the option to render colors by name rather than relying on hexadecimal values. It offers a
        robust and adaptable solution for managing and manipulating colors throughout your web projects.
    </x-docs::text>

    <x-docs::subtitle id="color-picker-simple" title="Color Picker Simple" />

    <x-docs::text>
        A straightforward method for utilizing the Color Picker is to render the component and leverage the built-in
        WireUI color palette as the default option.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-color-picker label="Select a Color" placeholder="Select the car color" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="default-colors" title="Default Colors" />

    <x-docs::text>
        By default, WireUI incorporates the complete set of Wind colors from its Tailwind color palette. However, if
        desired, you have the flexibility to customize these colors to suit your specific preferences or needs.
    </x-docs::text>

    <x-alert title="Information!" class="mb-4" info>
        You can customize the default colors from the
        <x-link href="https://alpinejs.dev/globals/alpine-store" label="Alpine.js store" target="_blank" info sm />.
    </x-alert>

    <x-docs::text.title title="From Alpine CDN:" />

    <x-docs::code.block language="js">
        @verbatim
            document.addEventListener('alpine:init', () => {
                Alpine.store('wireui:color-picker').setColors([
                    { name: 'White', value: '#FFF' },
                    { name: 'Black', value: '#000' },
                    { name: 'Teal', value: '#14b8a6' },
                ])
            })
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="From Node Modules:" />

    <x-docs::code.block language="js">
        @verbatim
            import Alpine from 'alpinejs'

            Alpine.store('wireui:color-picker').setColors([
                { name: 'White', value: '#FFF' },
                { name: 'Black', value: '#000' },
                { name: 'Teal', value: '#14b8a6' },
            ])

            Alpine.start()
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="tailwind-colors" title="Tailwind Colors" />

    <x-alert title="Information!" class="mb-4" info>
        To utilize Tailwind colors from your Tailwind CSS configuration, simply employ the following code snippet to
        generate the new color variations. If you're working with TypeScript, you can refer to the corresponding
        <x-link href="https://github.com/wireui/wireui/blob/e3e3aff647b306ec1883c7dabec208daaa475d46/ts/components/color-picker/colors.ts" label="TypeScript file" target="_blank" info sm />
        for additional guidance.
    </x-alert>

    <x-docs::code.block language="js">
        @verbatim
            import Alpine from 'alpinejs'
            // update with your Tailwind config path
            import { theme } from '@/tailwind.config.js'

            // array of duplicated colors to exclude
            const excludeColors = [
                'primary',
                'secondary',
                'positive',
                'negative',
                'warning',
                'info'
            ]

            const makeColors = () => {
                const tailwindColors = theme.extend.colors ?? {}

                const colors = Object.entries(tailwindColors).flatMap(([name, values]) => {
                    if (typeof values === 'string' || excludeColors.includes(name)) {
                        return []
                    }

                    return Object.entries(values).map(([tonality, hex]) => ({
                        name: `${name}-${tonality}`,
                        value: hex
                    }))
                })

                colors.push({ name: 'White', value: '#fff' })
                colors.push({ name: 'Black', value: '#000' })

                return colors
            }

            Alpine.store('wireui:color-picker').setColors(makeColors())
        @endverbatim
    </x-docs::code.block>

    <x-alert title="Attention" class="mb-4" warning>
        Be sure to provide the component attributes with the correct "colors" options for accurate configuration.
    </x-alert>

    <x-docs::subtitle id="custom-colors" title="Custom Colors" />

    <x-docs::text>
        You can also tailor the colors of a specific component, whether you choose to use labels or not.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="grid grid-cols-1 gap-5 sm:grid-cols-2">
            @verbatim
                <x-color-picker label="Select a Color" placeholder="Select the book color" :colors="[
                    ['name' => 'White', 'value' => '#FFF'],
                    ['name' => 'Black', 'value' => '#000'],
                    ['name' => 'Teal', 'value' => '#14b8a6'],
                    ['name' => 'Slate', 'value' => '#64748b'],
                    ['name' => 'Red', 'value' => '#ef4444'],
                    ['name' => 'Lime', 'value' => '#a3e635'],
                    ['name' => 'Sky', 'value' => '#38bdf8'],
                    ['name' => 'Violet', 'value' => '#8b5cf6'],
                    ['name' => 'Pink', 'value' => '#8b5cf6'],
                    ['name' => 'Indigo', 'value' => '#6366f1'],
                ]" />

                <x-color-picker label="Select a Color" placeholder="Select the book color" :colors="[
                    '#FFF',
                    '#000',
                    '#14b8a6',
                    '#64748b',
                    '#ef4444',
                    '#a3e635',
                    '#38bdf8',
                    '#8b5cf6',
                    '#8b5cf6',
                    '#6366f1',
                ]" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="color-name-as-value" title="Color name as value" />

    <x-docs::text>
        An alternative option is to render the color by name rather than using hexadecimal values.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-color-picker label="Select a Color" placeholder="Select the book color" color-name-as-value />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
