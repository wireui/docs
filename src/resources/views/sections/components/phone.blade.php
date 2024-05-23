<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#default-phone" label="Default Phone" />

            <x-docs::summary.header href="#custom-phone-mask" label="Custom Phone Mask" />

            <x-docs::summary.header href="#create-custom-input" label="Create a Custom Input" />

            <x-docs::summary.header href="#phone-api" label="Phone API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="phone" title="Phone" />

    <x-docs::text>
        The phone input component offers a versatile and customizable feature in WireUI. It allows you to assign various
        masks, giving you multiple options for tailoring the input format to your specific needs. To create a custom
        phone input component, you can leverage WireUI's Maskable. By defining the <b>getInputMask</b> function, you can
        specify the desired mask for the component, enabling seamless integration of your chosen input format.
        Furthermore, for users who prefer a quick and easy setup, the phone input component comes readily equipped with
        WireUI's default masks, simplifying the process of working with phone input formatting.
    </x-docs::text>

    <x-docs::subtitle id="default-phone" title="Default Phone" />

    <x-docs::text>
        You can effortlessly utilize the phone input with WireUI's default masks.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-phone label="Phone" placeholder="Phone" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-phone-mask" title="Custom Phone Mask" />

    <x-docs::text>
        We can assign various masks to the phone input component, allowing for multiple customization options.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-phone
                    id="multiple-mask"
                    wire:model="phone"
                    label="Phone"
                    placeholder="Phone"
                    :mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="create-custom-input" title="Create a Custom Input" />

    <x-docs::text>
        Here, we present an example illustrating the creation of a custom component using WireUi's Maskable. All you
        need to do is define the <b>getInputMask</b> function, which should return a string containing the desired mask to be
        applied to the component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\View\Components;

            use WireUi\View\Components\Inputs\Maskable;

            class CustomPhone extends Maskable
            {
                protected function getInputMask(): array
                {
                    return ['(##) ####-####', '(##) #####-####'];
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="phone-api" title="Phone API" />

    <x-alert title="Attention!" class="my-4" warning>
        The Phone component receives all options from
        <x-link href="/components/maskable#maskable-api" warning sm>Maskable Component</x-link>.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('phone')])
</div>
