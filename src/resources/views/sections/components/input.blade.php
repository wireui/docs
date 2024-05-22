<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#input-simple" label="Input Simple" />

            <x-docs::summary.header href="#input-description" label="Input Description" />

            <x-docs::summary.header href="#input-corner" label="Input Corner" />

            <x-docs::summary.header href="#input-icon" label="Input Icon" />

            <x-docs::summary.header href="#input-right-icon" label="Input Right Icon" />

            <x-docs::summary.header href="#input-two-icons" label="Input Two Icons" />

            <x-docs::summary.header href="#input-prefix" label="Input Prefix" />

            <x-docs::summary.header href="#input-suffix" label="Input Suffix" />

            <x-docs::summary.header href="#input-prepend" label="Input Prepend" />

            <x-docs::summary.header href="#input-append" label="Input Append" />

            <x-docs::summary.header href="#input-api" label="Input API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="input" title="Input" />

    <x-docs::text>
        The input component offers a high degree of flexibility and customization. Users can easily add labels and
        descriptions to the input, and they have the option to include icons on both the left and right sides for
        additional visual elements. Furthermore, the component supports prefixes and suffixes to further tailor the
        input's content. For those seeking even greater customization, the prepend and append slots provide extensive
        options for designing the input to suit their specific needs and preferences.
    </x-docs::text>

    <x-docs::subtitle id="input-simple" title="Input Simple" />

    <x-docs::text>
        The input can be easily utilized by simply adding a label.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    label="Name"
                    placeholder="your name"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-description" title="Input Description" />

    <x-docs::text>
        An additional option for the input is to include a description.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    label="Name"
                    placeholder="your name"
                    description="Inform your full name"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-corner" title="Input Corner" />

    <x-docs::text>
        Within the input, there is also the option to utilize the <b>corner</b> attribute.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    label="Name"
                    placeholder="your name"
                    corner="Ex: John"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-icon" title="Input Icon" />

    <x-docs::text>
        You can also consider adding an icon to the left.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    icon="user"
                    label="Name"
                    placeholder="your name"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-right-icon" title="Input Right Icon" />

    <x-docs::text>
        Another option is to include an icon on the right.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    right-icon="user"
                    label="Name"
                    placeholder="your name"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-two-icons" title="Input Two Icons" />

    <x-docs::text>
        If needed, the user can utilize icons on both sides.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    icon="user"
                    right-icon="pencil"
                    label="Name"
                    placeholder="your name"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-prefix" title="Input Prefix" />

    <x-docs::text>
        Furthermore, you have the option of incorporating prefixes.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    label="Website"
                    placeholder="your-website.com"
                    prefix="https://www."
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-suffix" title="Input Suffix" />

    <x-docs::text>
        You can also enhance the input by including suffixes.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input
                    label="Email"
                    placeholder="your email"
                    suffix="@mail.com"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-prepend" title="Input Prepend" />

    <x-docs::text>
        For even more extensive customization, you can make use of the prepend slot.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input label="Name" placeholder="your name">
                    <x-slot name="prepend">
                        <x-button
                            class="h-full"
                            icon="bars-arrow-up"
                            rounded="rounded-l-md"
                            primary
                            flat
                        />
                    </x-slot>
                </x-input>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-append" title="Input Append" />

    <x-docs::text>
        Additionally, the append slot is available for further customization.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-input label="Name" placeholder="your name">
                    <x-slot name="append">
                        <x-button
                            class="h-full"
                            icon="bars-arrow-up"
                            rounded="rounded-r-md"
                            primary
                            flat
                        />
                    </x-slot>
                </x-input>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="input-api" title="Input API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('input')])
</div>
