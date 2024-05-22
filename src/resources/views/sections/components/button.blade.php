<?php
$sleeping = fn() => sleep(2);
?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#solid-colors" label="Solid Colors" />

            <x-docs::summary.header href="#light-colors" label="Light Colors" />

            <x-docs::summary.header href="#outline-colors" label="Outline Colors" />

            <x-docs::summary.header href="#flat-colors" label="Flat Colors" />

            <x-docs::summary.header href="#state-colors" label="State Colors" />

            <x-docs::summary.header href="#rounders-button" label="Rounders Button" />

            <x-docs::summary.header href="#mini-buttons" label="Mini Buttons" />

            <x-docs::summary.header href="#button-sizes" label="Button Sizes" />

            <x-docs::summary.header href="#button-icons" label="Button Icons" />

            <x-docs::summary.header href="#button-link" label="Button Link" />

            <x-docs::summary.header href="#loading-spinner" label="Loading Spinner" />

            <x-docs::summary.header href="#button-api" label="Button API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="button" title="Button" />

    <x-docs::text>
        The button component is a powerful tool that opens up a world of possibilities for customization. With multiple
        variants, a rich palette of colors, and a straightforward API, it empowers you to enhance your application with
        beautiful and functional components. Whether you're looking to create eye-catching call-to-action buttons,
        subtle navigation links, or interactive elements, the button component gives you the control and versatility you
        need to make your application stand out. Additionally, you can easily add loading indicators for specific
        actions and fine-tune their timing, making it a comprehensive solution for creating an engaging user experience.
    </x-docs::text>

    <x-docs::subtitle id="solid-colors" title="Solid Colors" />

    <x-docs::text>
        We offer an extensive range of solid colors to allow you to customize your application to your liking.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                <x-button label="Default" />
                <x-button black label="Black" />
                <x-button white label="White" />
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
                <x-button primary label="Primary" />
                <x-button secondary label="Secondary" />
                <x-button positive label="Positive" />
                <x-button negative label="Negative" />
                <x-button warning label="Warning" />
                <x-button info label="Info" />
                <x-button slate label="Slate" />
                <x-button gray label="Gray" />
                <x-button zinc label="Zinc" />
                <x-button neutral label="Neutral" />
                <x-button stone label="Stone" />
                <x-button red label="Red" />
                <x-button yellow label="Yellow" />
                <x-button amber label="Amber" />
                <x-button orange label="Orange" />
                <x-button lime label="Lime" />
                <x-button green label="Green" />
                <x-button emerald label="Emerald" />
                <x-button teal label="Teal" />
                <x-button cyan label="Cyan" />
                <x-button sky label="Sky" />
                <x-button blue label="Blue" />
                <x-button indigo label="Indigo" />
                <x-button violet label="Violet" />
                <x-button purple label="Purple" />
                <x-button fuchsia label="Fuchsia" />
                <x-button pink label="Pink" />
                <x-button rose label="Rose" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="light-colors" title="Light Colors" />

    <x-docs::text>
        In version 2, we've introduced a new <b>light</b> variant, which presents a unique
        model for rendering your button, utilizing Tailwind's extensive color palette.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                <x-button light label="Default" />
                <x-button light black label="Black" />
                <x-button light white label="White" />
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
                <x-button light primary label="Primary" />
                <x-button light secondary label="Secondary" />
                <x-button light positive label="Positive" />
                <x-button light negative label="Negative" />
                <x-button light warning label="Warning" />
                <x-button light info label="Info" />
                <x-button light slate label="Slate" />
                <x-button light gray label="Gray" />
                <x-button light zinc label="Zinc" />
                <x-button light neutral label="Neutral" />
                <x-button light stone label="Stone" />
                <x-button light red label="Red" />
                <x-button light yellow label="Yellow" />
                <x-button light amber label="Amber" />
                <x-button light orange label="Orange" />
                <x-button light lime label="Lime" />
                <x-button light green label="Green" />
                <x-button light emerald label="Emerald" />
                <x-button light teal label="Teal" />
                <x-button light cyan label="Cyan" />
                <x-button light sky label="Sky" />
                <x-button light blue label="Blue" />
                <x-button light indigo label="Indigo" />
                <x-button light violet label="Violet" />
                <x-button light purple label="Purple" />
                <x-button light fuchsia label="Fuchsia" />
                <x-button light pink label="Pink" />
                <x-button light rose label="Rose" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="outline-colors" title="Outline Colors" />

    <x-docs::text>
        We also provide this array of colors for the outline variant.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                <x-button outline label="Default" />
                <x-button outline black label="Black" />
                <x-button outline white label="White" />
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6 bg-red-500pr-4">
                <x-button outline primary label="Primary" />
                <x-button outline secondary label="Secondary" />
                <x-button outline positive label="Positive" />
                <x-button outline negative label="Negative" />
                <x-button outline warning label="Warning" />
                <x-button outline info label="Info" />
                <x-button outline slate label="Slate" />
                <x-button outline gray label="Gray" />
                <x-button outline zinc label="Zinc" />
                <x-button outline neutral label="Neutral" />
                <x-button outline stone label="Stone" />
                <x-button outline red label="Red" />
                <x-button outline yellow label="Yellow" />
                <x-button outline amber label="Amber" />
                <x-button outline orange label="Orange" />
                <x-button outline lime label="Lime" />
                <x-button outline green label="Green" />
                <x-button outline emerald label="Emerald" />
                <x-button outline teal label="Teal" />
                <x-button outline cyan label="Cyan" />
                <x-button outline sky label="Sky" />
                <x-button outline blue label="Blue" />
                <x-button outline indigo label="Indigo" />
                <x-button outline violet label="Violet" />
                <x-button outline purple label="Purple" />
                <x-button outline fuchsia label="Fuchsia" />
                <x-button outline pink label="Pink" />
                <x-button outline rose label="Rose" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="flat-colors" title="Flat Colors" />

    <x-docs::text>
        We offer a diverse selection of colors for the flat variant as well.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                <x-button flat label="Default" />
                <x-button flat black label="Black" />
                <x-button flat white label="White" />
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
                <x-button flat primary label="Primary" />
                <x-button flat secondary label="Secondary" />
                <x-button flat positive label="Positive" />
                <x-button flat negative label="Negative" />
                <x-button flat warning label="Warning" />
                <x-button flat info label="Info" />
                <x-button flat slate label="Slate" />
                <x-button flat gray label="Gray" />
                <x-button flat zinc label="Zinc" />
                <x-button flat neutral label="Neutral" />
                <x-button flat stone label="Stone" />
                <x-button flat red label="Red" />
                <x-button flat yellow label="Yellow" />
                <x-button flat amber label="Amber" />
                <x-button flat orange label="Orange" />
                <x-button flat lime label="Lime" />
                <x-button flat green label="Green" />
                <x-button flat emerald label="Emerald" />
                <x-button flat teal label="Teal" />
                <x-button flat cyan label="Cyan" />
                <x-button flat sky label="Sky" />
                <x-button flat blue label="Blue" />
                <x-button flat indigo label="Indigo" />
                <x-button flat violet label="Violet" />
                <x-button flat purple label="Purple" />
                <x-button flat fuchsia label="Fuchsia" />
                <x-button flat pink label="Pink" />
                <x-button flat rose label="Rose" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="state-colors" title="State Colors" />

    <x-docs::text>
        One notable feature of WireUI within buttons is the ability to assign distinct colors and variants
        to various states of the button. This empowers you with even more extensive customization options.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex gap-4">
            @verbatim
                <x-button label="Delete" right-icon="trash" interaction="negative" />

                <x-button label="Save" right-icon="check" flat interaction:solid="positive" />

                <x-button label="Cancel" right-icon="trash" outline hover="warning" focus:solid.gray />

                <x-mini-button rounded icon="trash" flat gray interaction="negative" />

                <x-mini-button rounded icon="plus" flat primary interaction:solid />

                <x-mini-button rounded icon="bookmark" flat gray hover:outline.negative focus:solid.positive />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text>
        Occasionally, you may wish to modify the button's style as the user interacts with it. For instance, when the
        user hovers over the button, you might want to transition its color to a different shade.
        <br><br>
        This can be accomplished by leveraging the <b>hover</b>, <b>focus</b>, and <b>interaction</b> attributes.
    </x-docs::text>

    <x-docs::text.title title="Effects:" />

    <x-docs::list>
        <x-docs::list.item>
            <b>hover</b>: when the mouse is over the button.
        </x-docs::list.item>

        <x-docs::list.item>
            <b>focus</b>: when the button is focused or clicked.
        </x-docs::list.item>

        <x-docs::list.item>
            <b>interaction</b>: hover and focus effects.
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::text.title title="Syntax:" />

    <x-docs::code.block no-copy language="blade" :line-numbers="false">
        @verbatim
            {effect}="{color}" - keep the current variant, but change the color
            {effect}:{variant} - keep the current color, but change the variant
            {effect}:{variant}="{color}" - change both
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="rounders-button" title="Rounders Button" />

    <x-docs::text>
        Customizing button rounding now grants you access to the full spectrum of Tailwind options,
        providing the flexibility for additional personalization in accordance with your preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-button squared label="No Color" />

                {{-- CSS: 'rounded-sm' --}}
                <x-button rounded="sm" primary label="Primary" />

                {{-- CSS: 'rounded' - DEFAULT --}}
                <x-button rounded="base" secondary label="Secondary" />

                {{-- CSS: 'rounded-md' --}}
                <x-button rounded="md" positive label="Positive" />

                {{-- CSS: 'rounded-lg' --}}
                <x-button rounded="lg" negative label="Negative" />

                {{-- CSS: 'rounded-xl' --}}
                <x-button rounded="xl" warning label="Warning" />

                {{-- CSS: 'rounded-2xl' --}}
                <x-button rounded="2xl" info label="Info" />

                {{-- CSS: 'rounded-3xl' --}}
                <x-button rounded="3xl" dark label="Dark" />

                {{-- CSS: 'rounded-full' - You can use |rounded| too --}}
                <x-button rounded="full" pink label="Pink" />

                {{-- Or Custom --}}
                <x-button rounded="rounded-[1.25rem]" red label="Red" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="mini-buttons" title="Mini Buttons" />

    <x-docs::text>
        Diverging from version 1, we've introduced the <b>mini-button</b>, which provides a wide array of customization
        possibilities, especially when it comes to rounding. In version 1, the sole available choice was the
        <b>button.circle</b>.
    </x-docs::text>

    <x-alert title="Attention!" class="my-4" warning>
        The attributes [full, right-icon, prepend, append] are not supported in <b>mini-button</b> component.
    </x-alert>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-3">
            @verbatim
                <x-mini-button rounded icon="home" />
                <x-mini-button rounded primary icon="pencil" />
                <x-mini-button rounded secondary icon="clipboard" />
                <x-mini-button rounded positive icon="check" />
                <x-mini-button rounded negative icon="x-mark" />
                <x-mini-button rounded warning icon="exclamation-triangle" />
                <x-mini-button rounded info icon="information-circle" />
                <x-mini-button rounded secondary label="A" />
                <x-mini-button rounded positive label="B" />
                <x-mini-button rounded negative label="C" />
                <x-mini-button rounded primary label="+" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="button-sizes" title="Button Sizes" />

    <x-docs::text>
        When it comes to size, our button component offers a diverse
        range of options designed to accommodate various scenarios.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="space-x-2 space-y-2">
            @verbatim
                <x-button 2xs secondary label="Secondary" />

                <x-button xs primary label="Primary" />

                <x-button sm positive label="Positive" />

                {{-- You can use |size="md"| too - DEFAULT --}}
                <x-button md negative label="Negative" />

                <x-button lg warning label="Warning" />

                <x-button xl stone label="Stone" />

                <x-button 2xl black label="Black" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="button-icons" title="Button Icons" />

    <x-docs::text>
        Additionally, you have the option to choose an <b>icon</b> for the left side of the label and a
        <b>right-icon</b>, positioned on the right side of the label, as the name suggests. Moreover, you can customize
        the size of these icons to suit your preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
            @verbatim
                <x-button icon="home" label="Default" />
                <x-button icon="pencil" primary label="Primary" />
                <x-button icon="clipboard" secondary label="Secondary" />
                <x-button icon="arrow-left" right-icon="arrow-right" positive label="Positive" />
                <x-button right-icon="x-mark" negative label="Negative" />
                <x-button right-icon="exclamation-triangle" warning label="Warning" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="button-link" title="Button Link" />

    <x-docs::text>
        You can use the button as a link by simply including the <b>href</b>
        attribute, and it will automatically render as a link.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex items-center gap-4">
            @verbatim
                <x-button href="https://google.com?ref={{ config('app.url') }}" target="_blank" label="Go to Google"
                    teal />

                <x-mini-button href="https://github.com/PH7-Jack?ref={{ config('app.url') }}" target="_blank" rounded
                    black>
                    <x-svg.github class="w-4 h-4 fill-white" />
                </x-mini-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="loading-spinner" title="Loading Spinner" />

    <x-docs::text>
        Another notable advantage of our button is the ability to incorporate a loading indicator for
        specific actions, giving you the flexibility to customize the delay and display duration.
    </x-docs::text>

    <x-alert title="Information!" class="my-4" info>
        You can display a loading spinner when an action is triggered. By specifying the <b>wire:target</b> value in the
        <b>spinner</b> prop, you can control which specific actions trigger the loading effect. If no value is provided,
        the loading effect will be applied to all actions.
    </x-alert>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-4">
            @verbatim
                <x-mini-button rounded wire:click="$refresh" teal icon="check" spinner />

                <x-mini-button rounded wire:click="sleeping" teal icon="check" spinner.longest />

                <x-button wire:click="$refresh" spinner primary label="Without target" />

                <x-button wire:click="sleeping" spinner="sleeping" primary label="With target" />

                <x-button wire:click="sleeping" spinner.longest="sleeping" primary
                    label="With target + delay modifier" />

                <x-button wire:click="sleeping" spinner.longest="sleeping" right-icon="x-mark" primary
                    label="With target + delay modifier" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="button-api" title="Button API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('button')])
</div>
