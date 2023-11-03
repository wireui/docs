<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#card-simple" label="Card Simple" />

            <x-docs::summary.header href="#card-slots" label="Card Slots" />

            <x-docs::summary.header href="#card-paddings" label="Card Paddings" />

            <x-docs::summary.header href="#card-rounders" label="Card Rounders" />

            <x-docs::summary.header href="#card-shadows" label="Card Shadows" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="card" title="Card" />

    <x-docs::text>
        Cards are a popular choice for organizing and displaying content within a confined container, effectively
        isolating and highlighting a specific subject or topic. They offer a structured framework for presenting
        information and can seamlessly incorporate interactive elements such as menus or buttons, providing users with a
        cohesive and engaging experience.
        <br><br>
        The utilization of cards contributes to the overall user-friendliness of a web page or application. They
        facilitate a clean and organized layout, making it easier for users to read, scan, and scroll through the
        content. Cards can be employed to present a wide range of information, including articles, product listings,
        user profiles, or any other content that benefits from a visually appealing and compartmentalized presentation.
    </x-docs::text>

    <x-docs::subtitle id="card-simple" title="Card Simple" />

    <x-docs::text>
        You can use the card component in a straightforward manner by simply providing the content, and optionally,
        including a title. By default, the card includes borders, but these can be easily removed if you prefer.
    </x-docs::text>

    <x-docs::code.preview language="blade" color>
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-card>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                <x-card title="Lorem Ipsum is simply!">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                <x-card title="Lorem Ipsum is simply!" borderless>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="card-slots" title="Card Slots" />

    <x-docs::text>
        In the card component, you have the flexibility to customize various slots. You can use the default slot for
        your content and apply custom classes as needed. The title can also be supplied as a slot. Furthermore, there
        are dedicated slots available: one for adding an action button to the header, and another for the footer,
        allowing you to include any additional elements or action buttons as desired.
    </x-docs::text>

    <x-docs::code.preview language="blade" color>
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-card title="Lorem Ipsum is simply!">
                    <x-slot name="slot" class="!text-rose-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque
                        dapibus. Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                    </x-slot>
                </x-card>

                <x-card>
                    <x-slot name="title" class="italic !font-bold">
                        Lorem Ipsum is simply!
                    </x-slot>

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                <x-card title="Lorem Ipsum is simply!">
                    <x-slot name="action">
                        <x-mini-button icon="ellipsis-vertical" icon-size="md" primary flat xs />
                    </x-slot>

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                <x-card title="Lorem Ipsum is simply!" rounded="3xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.

                    <x-slot name="footer" class="flex items-center justify-between">
                        <x-button label="Delete" flat />

                        <x-button label="Save" primary />
                    </x-slot>
                </x-card>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="card-paddings" title="Card Paddings" />

    <x-docs::text>
        We offer a range of padding options to accommodate various scenarios,
        allowing you to customize them according to your specific preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade" color>
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'p-0' --}}
                <x-card title="Lorem Ipsum is simply!" padding="none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'px-1 py-3 md:px-2' --}}
                <x-card title="Lorem Ipsum is simply!" padding="small">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'px-2 py-5 md:px-4' - DEFAULT --}}
                <x-card title="Lorem Ipsum is simply!" padding="medium">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'px-3 py-6 md:px-5' --}}
                <x-card title="Lorem Ipsum is simply!" padding="large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- Or Custom --}}
                <x-card title="Lorem Ipsum is simply!" padding="px-8 py-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="card-rounders" title="Card Rounders" />

    <x-docs::text>
        The card component now offers a wide range of rounding customizations. You have access
        to all of Tailwind's options or the flexibility to create your own custom styles.
    </x-docs::text>

    <x-docs::code.preview language="blade" color>
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-card title="Lorem Ipsum is simply!" squared>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-sm' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded' - DEFAULT --}}
                <x-card title="Lorem Ipsum is simply!" rounded="base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-md' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-lg' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-xl' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-2xl' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'rounded-3xl' --}}
                <x-card title="Lorem Ipsum is simply!" rounded="3xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="card-shadows" title="Card Shadows" />

    <x-docs::text>
        The same applies to shadows. You can utilize all Tailwind
        options, and we also welcome customizable shadow values.
    </x-docs::text>

    <x-docs::code.preview language="blade" color>
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'shadow-none' - You can use |shadowless| too --}}
                <x-card title="Lorem Ipsum is simply!" shadow="none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-sm' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow' - DEFAULT --}}
                <x-card title="Lorem Ipsum is simply!" shadow="base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-md' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-lg' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-xl' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-2xl' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>

                {{-- CSS: 'shadow-inner' --}}
                <x-card title="Lorem Ipsum is simply!" shadow="inner">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
