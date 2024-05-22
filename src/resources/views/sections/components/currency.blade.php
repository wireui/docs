<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#default" label="Currency Default" />

            <x-docs::summary.header href="#currency-custom" label="Currency Custom" />

            <x-docs::summary.header href="#examples" label="Examples" />

            <x-docs::summary.header href="#currency-api" label="Currency API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="currency" title="Currency" />

    <x-docs::text>
        The currency input component is a versatile and user-friendly feature that can be seamlessly integrated into
        your project. It allows for customization, letting you define parameters such as the decimal separator,
        thousands separator, and precision to suit your specific requirements. This component is showcased through a
        variety of practical examples, making it a valuable addition to any project.
    </x-docs::text>

    <x-docs::subtitle id="default" title="Currency Default" />

    <x-docs::text>
        The currency input feature is user-friendly and a compelling addition to any project.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-currency
                    label="Currency"
                    placeholder="Currency"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="currency-custom" title="Currency Custom" />

    <x-docs::text>
        You can easily customize the currency input by specifying the decimal separator, thousands separator, and
        precision to meet your specific needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-currency
                    label="Currency"
                    placeholder="Currency"
                    thousands="."
                    decimal=","
                    precision="4"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="examples" title="Examples" />

    <x-docs::text>
        Here are various examples demonstrating the utilization of currency input.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @verbatim
                <x-currency
                    label="Currency"
                    placeholder="Currency"
                    icon="currency-dollar"
                    thousands="."
                    decimal=","
                    precision="4"
                />

                <x-currency
                    label="Currency no Decimals"
                    placeholder="Currency"
                    precision="0"
                />

                <x-currency
                    label="Currency"
                    placeholder="Currency"
                />

                <x-currency
                    label="Currency"
                    prefix="R$"
                    thousands="."
                    decimal=","
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="currency-api" title="Currency API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('currency')])
</div>
