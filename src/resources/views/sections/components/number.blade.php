<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#number-simple" label="Number Simple" />

            <x-docs::summary.header href="#number-options" label="Number Options" />

            <x-docs::summary.header href="#hold-directive" label="Hold Directive" />

            <x-docs::summary.header href="#number-api" label="Number API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="number" title="Number" />

    <x-docs::text>
        The number input component is a user-friendly element that offers a fresh perspective on the HTML number input.
        It is managed through a library provided by WireUI, which can also be used independently. This component
        simplifies the process of inputting numerical values and provides an enhanced experience for users.
    </x-docs::text>

    <x-docs::subtitle id="number-simple" title="Number Simple" />

    <x-docs::text>
        The number input is user-friendly and offers a fresh perspective on the HTML number input component.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-number label="How many Burgers?" placeholder="0" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="number-options" title="Number Options" />

    <x-docs::text>
        The number input accepts the html number input attributes, such as <x-docs::mark>min</x-docs::mark>,
        <x-docs::mark>max</x-docs::mark>, and <x-docs::mark>step</x-docs::mark>. These attributes allow you to set the
        minimum and maximum values, as well as the step value for the number input.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-number min="5" max="10" step="0.2" label="How many Burgers?" value="6" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="hold-directive" title="Hold Directive" />

    <x-docs::text>
        We utilize a library directly from WireUI to manage the number input, and it can also be used independently. For
        further information about the <x-docs::mark>x-hold</x-docs::mark> directive, please visit this
        <x-link href="https://www.npmjs.com/package/@wireui/alpinejs-hold-directive" label="here" target="_blank" teal />.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center">
            @verbatim
                <div x-data="{ count: 0 }" class="flex items-center gap-x-3">
                    <x-button x-hold.click.repeat.200ms="count--" icon="minus" />

                    <span class="bg-teal-600 text-white px-5 py-1.5 rounded-lg" x-text="count"></span>

                    <x-button x-hold.click.repeat.200ms="count++" icon="plus" />
                </div>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="number-api" title="Number API" />

    <x-alert title="Attention!" class="my-4" warning>
        The Number component receives all options from
        <x-link href="/components/input#input-api" warning sm>Input Component</x-link>.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('number')])
</div>
