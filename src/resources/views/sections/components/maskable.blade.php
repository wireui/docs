<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#mask-tokens" label="Mask Tokens" />

            <x-docs::summary.header href="#mask-simple" label="Mask Simple" />

            <x-docs::summary.header href="#mask-multiple" label="Mask Multiple" />

            <x-docs::summary.header href="#mask-anything" label="Mask Anything" />

            <x-docs::summary.header href="#create-custom-input" label="Create a Custom Input" />

            <x-docs::summary.header href="#maskable-api" label="Maskable API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="maskable" title="Maskable" />

    <x-docs::text>
        The maskable input component is a versatile and user-friendly element that you can seamlessly integrate into
        your projects. It allows you to create customized masks with different tokens, offering a wide range of
        configurations. You can easily craft a personalized component using WireUi's Maskable, defining the
        <b>getInputMask</b> function to specify the desired mask for the input. This component enables you to apply a
        variety of masks, enhancing its adaptability and utility in various applications.
    </x-docs::text>

    <x-docs::subtitle id="mask-tokens" title="Mask Tokens" />

    <x-docs::text.title>
        Familiarize Yourself with the Tokens:
    </x-docs::text.title>

    <x-docs::list>
        <x-docs::list.item>
            Token <b>#</b> is Numeric
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>X</b> is Alphanumeric
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>S</b> is Alpha
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>A</b> is Alpha forcing UPPERCASE
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>a</b> is Alpha forcing lowercase
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>H</b> is 24 hours pattern
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>h</b> is 12 hours pattern
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>m</b> is minutes pattern
        </x-docs::list.item>

        <x-docs::list.item>
            Token <b>!</b> is Escape
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::code.block language="js">
        @verbatim
            {
                '#': { pattern: /\d/ },
                'X': { pattern: /[0-9a-zA-Z]/ },
                'S': { pattern: /[a-zA-Z]/ },
                'A': { pattern: /[a-zA-Z]/, transform: (v: string): string => v.toLocaleUpperCase() },
                'a': { pattern: /[a-zA-Z]/, transform: (v: string): string => v.toLocaleLowerCase() },
                'H': { pattern: /([01][0-9])|(2[0-3])/ },
                'h': { pattern: /[1-9]|1[0-2]/ },
                'm': { pattern: /[0-5][0-9]/ },
                '!': { escape: true }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="mask-simple" title="Mask Simple" />

    <x-docs::text>
        The maskable input is both user-friendly and a captivating addition to your project.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-maskable
                    id="simple-mask"
                    label="Maskable Input"
                    mask="(###) ###-####"
                    placeholder="Phone number"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="mask-multiple" title="Mask Multiple" />

    <x-docs::text>
        You can assign various masks to the maskable input component, allowing for multiple configurations.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-maskable
                    id="multiple-mask"
                    label="Multiple Maskable Input"
                    :mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                    placeholder="Phone number"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="mask-anything" title="Mask Anything" />

    <x-docs::text>
        You can further customize your masks by using distinct tokens for various configurations.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-maskable
                    id="mask-anything"
                    label="Mask Anything"
                    mask="##.SS.A.a-##"
                    placeholder="12.aB.C.d-34"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="create-custom-input" title="Create a Custom Input" />

    <x-docs::text>
        Here's an example demonstrating how to create a custom component using WireUi's Maskable. Simply define the
        <b>getInputMask</b> function, which should return a string specifying the desired mask for the component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\View\Components;

            use WireUi\View\Components\Inputs\Maskable;

            class CustomMaskable extends Maskable
            {
                protected function getInputMask(): array
                {
                    return ['(##) ####-####', '(##) #####-####'];
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="maskable-api" title="Maskable API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('maskable')])
</div>
