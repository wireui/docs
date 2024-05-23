<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#toggle-label" label="Toggle Label" />

            <x-docs::summary.header href="#toggle-sizes" label="Toggle Sizes" />

            <x-docs::summary.header href="#toggle-rounders" label="Toggle Rounders" />

            <x-docs::summary.header href="#toggle-colors" label="Toggle Colors" />

            <x-docs::summary.header href="#toggle-api" label="Toggle API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="toggle" title="Toggle" />

    <x-docs::text>
        The toggle component offers a versatile set of features to enhance user experience and customization. Users have
        the flexibility to position the label on either the right or left side of the toggle. Additionally, the
        component provides a range of toggle sizes to suit diverse needs. This updated version introduces the exciting
        capability to apply various rounding styles, allowing for greater design flexibility. Furthermore, users can
        easily modify the toggle's color with six default options, including <b>primary</b>, <b>secondary</b>,
        <b>positive</b>, <b>negative</b>, <b>warning</b>, and <b>info</b>.
    </x-docs::text>

    <x-docs::subtitle id="toggle-label" title="Toggle Label" />

    <x-docs::text>
        You can customize the label's position within the toggle, opting to place it either on the right or on the left.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-toggle id="label" label="Label in Left" name="toggle" />

                <x-toggle id="right-label" right-label="Label in Right" name="toggle" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-sizes" title="Toggle Sizes" />

    <x-docs::text>
        We provide a range of toggle sizes to accommodate your requirements.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8 items-center">
            @verbatim
                <x-toggle id="size-xs" name="toggle" xs />

                <x-toggle id="size-sm" name="toggle" sm /> {{-- DEFAULT --}}

                <x-toggle id="size-md" name="toggle" md />

                <x-toggle id="size-lg" name="toggle" lg />

                <x-toggle id="size-xl" name="toggle" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-rounders" title="Toggle Rounders" />

    <x-docs::text>
        One of the exciting new features in this updated version is the ability to apply various
        rounding styles to toggles and customize them according to your preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-toggle id="rounded-none" name="toggle" squared label="None" xl />

                {{-- CSS: 'rounded-sm' --}}
                <x-toggle id="rounded-sm" name="toggle" rounded="sm" label="SM" xl />

                {{-- CSS: 'rounded' - DEFAULT --}}
                <x-toggle id="rounded-base" name="toggle" rounded="base" label="Base" xl />

                {{-- CSS: 'rounded-md' --}}
                <x-toggle id="rounded-md" name="toggle" rounded="md" label="MD" xl />

                {{-- CSS: 'rounded-lg' --}}
                <x-toggle id="rounded-lg" name="toggle" rounded="lg" label="LG" xl />

                {{-- CSS: 'rounded-xl' --}}
                <x-toggle id="rounded-xl" name="toggle" rounded="xl" label="XL" xl />

                {{-- CSS: 'rounded-2xl' --}}
                <x-toggle id="rounded-2xl" name="toggle" rounded="2xl" label="2XL" xl />

                {{-- CSS: 'rounded-3xl' --}}
                <x-toggle id="rounded-3xl" name="toggle" rounded="3xl" label="3XL" xl />

                {{-- CSS: 'rounded-full' - You can use |rounded| too --}}
                <x-toggle id="rounded-full" name="toggle" rounded="full" label="Full" xl />

                {{-- Or Custom --}}
                <x-toggle id="rounded-custom" name="toggle" rounded="rounded-[0.4rem]" label="Custom" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-colors" title="Toggle Colors" />

    <x-docs::text>
        You can now modify the color within the toggle using six default options: <b>primary</b>,
        <b>secondary</b>, <b>positive</b>, <b>negative</b>, <b>warning</b>, and <b>info</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-toggle id="color-primary" name="toggle" label="Primary" primary xl />

                <x-toggle id="color-secondary" name="toggle" label="Secondary" secondary xl />

                <x-toggle id="color-positive" name="toggle" label="Positive" positive xl />

                <x-toggle id="color-negative" name="toggle" label="Negative" negative xl />

                <x-toggle id="color-warning" name="toggle" label="Warning" warning xl />

                <x-toggle id="color-info" name="toggle" label="Info" info xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-api" title="Toggle API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('toggle')])
</div>
