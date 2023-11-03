<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#alert-simple" label="Alert Simple" />

            <x-docs::summary.header href="#alert-variants" label="Alert Variants" />

            <x-docs::summary.header href="#alert-slots" label="Alert Slots" />

            <x-docs::summary.header href="#alert-paddings" label="Alert Paddings" />

            <x-docs::summary.header href="#alert-rounders" label="Alert Rounders" />

            <x-docs::summary.header href="#alert-shadows" label="Alert Shadows" />

            <x-docs::summary.header href="#alert-icons" label="Alert Icons" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title title="Alert" />

    <x-docs::text>
        The alert component serves as a flexible user interface element designed to communicate critical messages and
        information to users. Its primary purpose is to seize the user's attention and deliver feedback, warnings,
        notifications, or various other types of updates.
    </x-docs::text>

    <x-docs::subtitle id="alert-simple" title="Alert Simple" />

    <x-docs::text>
        The alert component natively has 6 colors, which are: <b>primary</b>, <b>secondary</b>, <b>positive</b>,
        <b>negative</b>, <b>warning</b> and <b>info</b>. A simple way to use the alert is to just pass the title and the
        color you want, as in the example below:
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-alert title="Any Message!" />

                <x-alert title="Any Message!" secondary />

                <x-alert title="Success Message!" positive />

                <x-alert title="Error Message!" negative />

                <x-alert title="Alert Message!" warning />

                <x-alert title="Information Message!" info />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-variants" title="Alert Variants" />

    <x-docs::text>
        In the realm of the alert component, we offer three distinct variants to cater to the specific requirements of
        your project: <b>flat</b>, <b>outline</b>, and <b>solid</b>. It's important to note that the default variant for
        WireUI is <b>flat</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- DEFAULT --}}
                <x-alert title="Success Message!" positive flat />

                <x-alert title="Success Message!" positive outline />

                <x-alert title="Success Message!" positive solid />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-slots" title="Alert Slots" />

    <x-docs::text>
        In the context of the alert component, you can utilize the <b>title</b> attribute as a slot for enhanced
        customization. If you require both a title and a description, you have the flexibility to pass the description
        into either the default slot, and even tailor the default slot to your specific needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-alert warning>
                    <x-slot name="title" class="italic !font-bold">
                        This is an alert alert — check it out!
                    </x-slot>
                </x-alert>

                <x-alert title="Success Message!" positive>
                    This is an success alert — <b>check it out!</b>
                </x-alert>

                <x-alert title="Error Message!" negative>
                    <x-slot name="slot" class="italic">
                        This is an error alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-paddings" title="Alert Paddings" />

    <x-docs::text>
        Regarding padding, we provide a range of diverse options to enhance your project,
        and you have the freedom to customize these options to meet your specific needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'ml-2' --}}
                <x-alert title="Success Message!" positive padding="none">
                    <x-slot name="slot">
                        This is an success alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>

                {{-- CSS: 'pl-1 mt-1 ml-3' --}}
                <x-alert title="Error Message!" negative padding="small">
                    <x-slot name="slot">
                        This is an error alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>

                {{-- CSS: 'pl-1 mt-2 ml-5' - DEFAULT --}}
                <x-alert title="Alert Message!" warning padding="medium">
                    <x-slot name="slot">
                        This is an warning alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>

                {{-- CSS: 'pl-1 mt-3 ml-7' --}}
                <x-alert title="Information Message!" info padding="large">
                    <x-slot name="slot">
                        This is an information alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>

                {{-- Or Custom --}}
                <x-alert title="Any Message!" secondary padding="px-8 py-2">
                    <x-slot name="slot">
                        This is an any alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-rounders" title="Alert Rounders" />

    <x-docs::text>
        The alert component now offers a wide range of rounding customizations. You have access
        to all Tailwind options or the flexibility to create your own custom styles.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-alert title="Success Message!" positive squared />

                {{-- CSS: 'rounded-sm' --}}
                <x-alert title="Error Message!" negative rounded="sm" />

                {{-- CSS: 'rounded' - DEFAULT --}}
                <x-alert title="Alert Message!" warning rounded="base" />

                {{-- CSS: 'rounded-md' --}}
                <x-alert title="Information Message!" info rounded="md" />

                {{-- CSS: 'rounded-lg' --}}
                <x-alert title="Success Message!" positive rounded="lg" />

                {{-- CSS: 'rounded-xl' --}}
                <x-alert title="Error Message!" negative rounded="xl" />

                {{-- CSS: 'rounded-2xl' --}}
                <x-alert title="Alert Message!" warning rounded="2xl" />

                {{-- CSS: 'rounded-3xl' --}}
                <x-alert title="Information Message!" info rounded="3xl" />

                {{-- CSS: 'rounded-full' - You can use |rounded| too --}}
                <x-alert title="Success Message!" positive rounded="full" />

                {{-- Or Custom --}}
                <x-alert title="Error Message!" negative rounded="rounded-[1.25rem]" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-shadows" title="Alert Shadows" />

    <x-docs::text>
        The same applies to shadows. You can utilize all Tailwind options,
        and we also welcome customizable shadow values.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- CSS: 'shadow-none' - You can use |shadowless| too --}}
                <x-alert title="Success Message!" positive shadow="none" />

                {{-- CSS: 'shadow-sm' --}}
                <x-alert title="Error Message!" negative shadow="sm" />

                {{-- CSS: 'shadow' - DEFAULT --}}
                <x-alert title="Alert Message!" warning shadow="base" />

                {{-- CSS: 'shadow-md' --}}
                <x-alert title="Information Message!" info shadow="md" />

                {{-- CSS: 'shadow-lg' --}}
                <x-alert title="Success Message!" positive shadow="lg" />

                {{-- CSS: 'shadow-xl' --}}
                <x-alert title="Error Message!" negative shadow="xl" />

                {{-- CSS: 'shadow-2xl' --}}
                <x-alert title="Alert Message!" warning shadow="2xl" />

                {{-- CSS: 'shadow-inner' --}}
                <x-alert title="Information Message!" info shadow="inner" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-icons" title="Alert Icons" />

    <x-docs::text>
        The icons change based on the selected color. Below, you can see the icons displayed in their
        respective colors, but you also have the option to customize them or even remove them entirely.
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item>
            <b>primary:</b> bell
        </x-docs::list.item>

        <x-docs::list.item>
            <b>secondary:</b> information-circle
        </x-docs::list.item>

        <x-docs::list.item>
            <b>positive:</b> check-circle
        </x-docs::list.item>

        <x-docs::list.item>
            <b>negative:</b> x-circle
        </x-docs::list.item>

        <x-docs::list.item>
            <b>warning:</b> exclamation-triangle
        </x-docs::list.item>

        <x-docs::list.item>
            <b>info:</b> information-circle
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                {{-- This icon is the default for the warning color --}}
                <x-alert title="Warning Color!" warning />

                {{-- In this alert we changed the icon to one we liked --}}
                <x-alert title="Warning Color!" icon="arrow-left-on-rectangle" warning />

                {{-- In this alert we completely removed the icon --}}
                <x-alert title="Warning Color!" iconless warning />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
