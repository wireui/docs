<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#avatar-image" label="Avatar Image" />

            <x-docs::summary.header href="#avatar-label" label="Avatar Label" />

            <x-docs::summary.header href="#avatar-rounders" label="Avatar Rounders" />

            <x-docs::summary.header href="#avatar-sizes" label="Avatar Sizes" />

            <x-docs::summary.header href="#avatar-icon-sizes" label="Avatar Icon Sizes" />

            <x-docs::summary.header href="#avatar-borders" label="Avatar Borders" />

            <x-docs::summary.header href="#avatar-placeholder" label="Avatar Placeholder" />

            <x-docs::summary.header href="#avatar-group" label="Avatar Group" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="avatar" title="Avatar" />

    <x-docs::text>
        The avatar component is designed to showcase either an image, a label, or a default SVG placeholder. It's a
        versatile tool that allows you to create various features, such as profile pictures, with ease. The alert
        component natively has 6 colors, which are: <b>primary</b>, <b>secondary</b>, <b>positive</b>, <b>negative</b>,
        <b>warning</b> and <b>info</b>.
    </x-docs::text>

    <x-docs::subtitle id="avatar-image" title="Avatar Image" />

    <x-docs::text>
        A remarkably straightforward method for utilizing the avatar is by simply providing a link to the desired photo
        you wish to display.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-avatar xs warning :src="Vite::docs('andre.jpeg')" />

                <x-avatar sm primary :src="Vite::docs('fernando.jpeg')" />

                <x-avatar md :src="Vite::docs('keithyellen.jpg')" />

                <x-avatar lg :src="Vite::docs('joao-pedro.jpg')" />

                <x-avatar xl :src="Vite::docs('pedro.jpg')" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-label" title="Avatar Label" />

    <x-docs::text>
        An alternative approach for using the avatar involves providing the <b>label</b> attribute, typically containing
        initials or a state representation.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-avatar xs label="AB" />

                <x-avatar sm label="AB" />

                <x-avatar md label="AB" />

                <x-avatar lg label="AB" />

                <x-avatar xl label="AB" />

                <x-avatar 2xl>
                    <x-slot name="label" class="!text-rose-300 !font-extrabold italic">
                        AB
                    </x-slot>
                </x-avatar>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-rounders" title="Avatar Rounders" />

    <x-docs::text>
        The avatar now offers rounded customization options, giving you the flexibility to utilize either Tailwind's
        default settings or apply your own custom values.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-avatar xl squared :src="Vite::docs('pedro.jpg')" />

                {{-- CSS: 'rounded-sm' --}}
                <x-avatar xl rounded="sm" :src="Vite::docs('joao-pedro.jpg')" />

                {{-- CSS: 'rounded-sm' --}}
                <x-avatar xl rounded="base" :src="Vite::docs('andre.jpeg')" />

                {{-- CSS: rounded --}}
                <x-avatar xl rounded="md" :src="Vite::docs('fernando.jpeg')" />

                {{-- CSS: 'rounded-lg' --}}
                <x-avatar xl rounded="lg" :src="Vite::docs('keithyellen.jpg')" />

                {{-- CSS: 'rounded-xl' --}}
                <x-avatar xl rounded="xl" :src="Vite::docs('pedro.jpg')" />

                {{-- CSS: 'rounded-2xl' --}}
                <x-avatar xl rounded="2xl" :src="Vite::docs('joao-pedro.jpg')" />

                {{-- CSS: 'rounded-3xl' --}}
                <x-avatar xl rounded="3xl" :src="Vite::docs('andre.jpeg')" />

                {{-- CSS: 'rounded-full' - You can use |rounded| too - DEFAULT --}}
                <x-avatar xl rounded="full" :src="Vite::docs('fernando.jpeg')" />

                {{-- Or Custom --}}
                <x-avatar xl rounded="rounded-[1.25rem]" :src="Vite::docs('keithyellen.jpg')" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-sizes" title="Avatar Sizes" />

    <x-docs::text>
        The <b>size</b> property offers a broad spectrum of options, coupled with the flexibility
        for customization to suit your specific needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                {{-- CSS: 'w-6 h-6' --}}
                <x-avatar 2xs :src="Vite::docs('keithyellen.jpg')" primary />

                {{-- CSS: 'w-7 h-7' --}}
                <x-avatar xs label="AB" info />

                {{-- CSS: 'w-8 h-8' --}}
                <x-avatar sm label="AB" negative />

                {{-- CSS: 'w-10 h-10' - DEFAULT --}}
                <x-avatar md label="AB" warning />

                {{-- CSS: 'w-12 h-12' --}}
                <x-avatar lg :src="Vite::docs('joao-pedro.jpg')" positive />

                {{-- CSS: 'w-14 h-14' --}}
                <x-avatar xl label="AB" secondary />

                {{-- CSS: 'w-16 h-16' --}}
                <x-avatar 2xl label="AB" primary />

                {{-- Or Custom --}}
                <x-avatar size="w-20 h-20" :src="Vite::docs('pedro.jpg')" primary />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-icon-sizes" title="Avatar Icon Sizes" />

    <x-docs::text>
        You now have the option to adjust the icon's size to your liking. Please keep in mind that the default icon size
        aligns with the component's size, but you have the freedom to customize it as desired. It's important to clarify
        that this size modification exclusively pertains to the label and SVG icons.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                {{-- CSS: [ 'icon': 'w-4 h-4', 'label': 'text-2xs' ] --}}
                <x-avatar 2xl icon-size="2xs" icon="x-mark" primary />

                {{-- CSS: [ 'icon': 'w-5 h-5', 'label': 'text-xs' ] --}}
                <x-avatar 2xl icon-size="xs" label="AB" info />

                {{-- CSS: [ 'icon': 'w-7 h-7', 'label': 'text-sm' ] --}}
                <x-avatar 2xl icon-size="sm" label="AB" negative />

                {{-- CSS: [ 'icon': 'w-8 h-8', 'label': 'text-base' ] --}}
                <x-avatar 2xl icon-size="md" label="AB" warning />

                {{-- CSS: [ 'icon': 'w-9 h-9', 'label': 'text-lg' ] --}}
                <x-avatar 2xl icon-size="lg" icon="x-mark" positive />

                {{-- CSS: [ 'icon': 'w-12 h-12', 'label': 'text-xl' ] --}}
                <x-avatar 2xl icon-size="xl" label="AB" secondary />

                {{-- CSS: [ 'icon': 'w-16 h-16', 'label': 'text-2xl' ] --}}
                <x-avatar 2xl icon-size="2xl" label="AB" primary />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-borders" title="Avatar Borders" />

    <x-docs::text>
        You also have the ability to customize the border thickness of the avatar. You can stick with the default values
        or tailor it to your preferences in any way you see fit.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                {{-- CSS: border-0 - You can use |borderless| too --}}
                <x-avatar sm label="AB" negative border="none" />

                {{-- CSS: border --}}
                <x-avatar md label="AB" warning border="thin" />

                {{-- CSS: border-2 - DEFAULT --}}
                <x-avatar lg label="AB" positive border="base" />

                {{-- CSS: border-4 --}}
                <x-avatar xl label="AB" primary border="thick" />

                {{-- Or Custom --}}
                <x-avatar 2xl label="AB" primary border="border-8" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-placeholder" title="Avatar Placeholder" />

    <x-docs::text>
        When neither text nor an image is provided, the avatar will present a default SVG placeholder. You have the
        option to select your preferred icon for rendering, or it will default to a user icon.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-avatar 2xs icon="academic-cap" />

                <x-avatar xs info icon="arrow-down" />

                <x-avatar sm negative icon="chat-bubble-left-ellipsis" />

                <x-avatar md warning icon="building-office-2" />

                <x-avatar lg positive icon="bell-slash" />

                <x-avatar xl primary icon="at-symbol" />

                <x-avatar 2xl icon="arrow-up-circle" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="avatar-group" title="Avatar Group" />

    <x-docs::text>
        Here's an example of how you can utilize the avatar component to create a group.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex items-center -space-x-2">
                <x-avatar :src="Vite::docs('fernando.jpeg')" />

                <x-avatar :src="Vite::docs('andre.jpeg')" />

                <x-avatar :src="Vite::docs('keithyellen.jpg')" />

                <x-avatar :src="Vite::docs('joao-pedro.jpg')" />

                <x-avatar :src="Vite::docs('pedro.jpg')" />
            </div>
        @endverbatim
    </x-docs::code.preview>
</div>
