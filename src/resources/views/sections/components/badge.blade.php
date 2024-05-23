<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#default-colors" label="Default Colors" />

            <x-docs::summary.header href="#outline-colors" label="Outline Colors" />

            <x-docs::summary.header href="#flat-colors" label="Flat Colors" />

            <x-docs::summary.header href="#rounders-badge" label="Rounders Badges" />

            <x-docs::summary.header href="#mini-badges" label="Mini Badges" />

            <x-docs::summary.header href="#badge-sizes" label="Badge Sizes" />

            <x-docs::summary.header href="#badge-icons" label="Badge Icons" />

            <x-docs::summary.header href="#badge-slots" label="Badge Slots" />

            <x-docs::summary.header href="#badge-api" label="Badge API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="badge" title="Badge" />

    <x-docs::text>
        The badge component is a versatile feature-rich element that offers a multitude of styles and customization
        options to meet your specific needs. With a user-friendly API, integrating badges with icons and custom colors
        is a seamless process. You can effortlessly fine-tune the appearance of your badges, whether you want to change
        their size, adjust their colors, or add icons to either side of the label. For even greater control, the
        component provides append and prepend slots, enabling you to tailor the elements both to the left and right of
        the label as per your project requirements. This extensive flexibility ensures that you can achieve the desired
        look and feel for your badges, making them a perfect fit for your project.
    </x-docs::text>

    <x-docs::subtitle id="default-colors" title="Default Colors" />

    <x-docs::text>
        Within the badge component, the default variant is solid, and you can
        access the full spectrum of Tailwind colors for this component.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-badge label="Default" />
                <x-badge primary label="Primary" />
                <x-badge secondary label="Secondary" />
                <x-badge positive label="Positive" />
                <x-badge negative label="Negative" />
                <x-badge warning label="Warning" />
                <x-badge info label="Info" />
                <x-badge dark label="Dark" />
                <x-badge white label="White" />
                <x-badge black label="Black" />
                <x-badge slate label="Slate" />
                <x-badge gray label="Gray" />
                <x-badge zinc label="Zinc" />
                <x-badge neutral label="Neutral" />
                <x-badge stone label="Stone" />
                <x-badge red label="Red" />
                <x-badge orange label="Orange" />
                <x-badge amber label="Amber" />
                <x-badge lime label="Lime" />
                <x-badge green label="Green" />
                <x-badge emerald label="Emerald" />
                <x-badge teal label="Teal" />
                <x-badge cyan label="Cyan" />
                <x-badge sky label="Sky" />
                <x-badge blue label="Blue" />
                <x-badge indigo label="Indigo" />
                <x-badge violet label="Violet" />
                <x-badge purple label="Purple" />
                <x-badge fuchsia label="Fuchsia" />
                <x-badge pink label="Pink" />
                <x-badge rose label="Rose" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="outline-colors" title="Outline Colors" />

    <x-docs::text>
        We also offer the outline variant for your project. Similar to our other variants,
        you can make use of the complete palette of Tailwind colors.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-badge outline label="Default" />
                <x-badge outline primary label="Primary" />
                <x-badge outline secondary label="Secondary" />
                <x-badge outline positive label="Positive" />
                <x-badge outline negative label="Negative" />
                <x-badge outline warning label="Warning" />
                <x-badge outline info label="Info" />
                <x-badge outline dark label="Dark" />
                <x-badge outline white label="White" />
                <x-badge outline black label="Black" />
                <x-badge outline slate label="Slate" />
                <x-badge outline gray label="Gray" />
                <x-badge outline zinc label="Zinc" />
                <x-badge outline neutral label="Neutral" />
                <x-badge outline stone label="Stone" />
                <x-badge outline red label="Red" />
                <x-badge outline orange label="Orange" />
                <x-badge outline amber label="Amber" />
                <x-badge outline lime label="Lime" />
                <x-badge outline green label="Green" />
                <x-badge outline emerald label="Emerald" />
                <x-badge outline teal label="Teal" />
                <x-badge outline cyan label="Cyan" />
                <x-badge outline sky label="Sky" />
                <x-badge outline blue label="Blue" />
                <x-badge outline indigo label="Indigo" />
                <x-badge outline violet label="Violet" />
                <x-badge outline purple label="Purple" />
                <x-badge outline fuchsia label="Fuchsia" />
                <x-badge outline pink label="Pink" />
                <x-badge outline rose label="Rose" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="flat-colors" title="Flat Colors" />

    <x-docs::text>
        We also provide the flat variant for your project. Like our other variants, you
        can access the full spectrum of Tailwind colors for your customization needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-badge flat label="Default" />
                <x-badge flat primary label="Primary" />
                <x-badge flat secondary label="Secondary" />
                <x-badge flat positive label="Positive" />
                <x-badge flat negative label="Negative" />
                <x-badge flat warning label="Warning" />
                <x-badge flat info label="Info" />
                <x-badge flat dark label="Dark" />
                <x-badge flat white label="White" />
                <x-badge flat black label="Black" />
                <x-badge flat slate label="Slate" />
                <x-badge flat gray label="Gray" />
                <x-badge flat zinc label="Zinc" />
                <x-badge flat neutral label="Neutral" />
                <x-badge flat stone label="Stone" />
                <x-badge flat red label="Red" />
                <x-badge flat orange label="Orange" />
                <x-badge flat amber label="Amber" />
                <x-badge flat lime label="Lime" />
                <x-badge flat green label="Green" />
                <x-badge flat emerald label="Emerald" />
                <x-badge flat teal label="Teal" />
                <x-badge flat cyan label="Cyan" />
                <x-badge flat sky label="Sky" />
                <x-badge flat blue label="Blue" />
                <x-badge flat indigo label="Indigo" />
                <x-badge flat violet label="Violet" />
                <x-badge flat purple label="Purple" />
                <x-badge flat fuchsia label="Fuchsia" />
                <x-badge flat pink label="Pink" />
                <x-badge flat rose label="Rose" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="rounders-badge" title="Rounders Badges" />

    <x-docs::text>
        Badge rounding customization now offers access to the complete range of Tailwind options,
        along with the flexibility for further customization as per your preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-3">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-badge squared label="No Color" />

                {{-- CSS: 'rounded-sm' --}}
                <x-badge rounded="sm" primary label="Primary" />

                {{-- CSS: 'rounded' - DEFAULT --}}
                <x-badge rounded="base" secondary label="Secondary" />

                {{-- CSS: 'rounded-md' --}}
                <x-badge rounded="md" positive label="Positive" />

                {{-- CSS: 'rounded-lg' --}}
                <x-badge rounded="lg" negative label="Negative" />

                {{-- CSS: 'rounded-xl' --}}
                <x-badge rounded="xl" warning label="Warning" />

                {{-- CSS: 'rounded-2xl' --}}
                <x-badge rounded="2xl" info label="Info" />

                {{-- CSS: 'rounded-3xl' --}}
                <x-badge rounded="3xl" dark label="Dark" />

                {{-- CSS: 'rounded-full' - You can use |rounded| too --}}
                <x-badge rounded="full" pink label="Pink" />

                {{-- Or Custom --}}
                <x-badge rounded="rounded-[1.25rem]" red label="Red" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="mini-badges" title="Mini Badges" />

    <x-docs::text>
        In contrast to version 1, we've introduced the <b>mini-badge</b>, which offers extensive customization options,
        particularly with regards to rounding. In version 1, the only available option was the <b>badge.circle</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-3">
            @verbatim
                <x-mini-badge icon="home" rounded />
                <x-mini-badge primary icon="pencil" squared />
                <x-mini-badge secondary icon="clipboard-document-list" />
                <x-mini-badge positive icon="check" />
                <x-mini-badge negative icon="x-mark" />
                <x-mini-badge warning icon="exclamation-triangle" />
                <x-mini-badge info icon="information-circle" />
                <x-mini-badge dark icon="no-symbol" />
                <x-mini-badge secondary label="A" />
                <x-mini-badge positive label="B" />
                <x-mini-badge negative label="C" />
                <x-mini-badge primary label="+" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="badge-sizes" title="Badge Sizes" />

    <x-docs::text>
        The badge comes with three native size options: <b>sm</b>, <b>md</b>, and <b>lg</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                {{-- You can use |size="sm"| too - DEFAULT --}}
                <x-badge icon="face-smile" secondary label="Secondary" />

                <x-badge md icon="inbox-stack" positive label="Positive" />

                <x-badge lg icon="power" negative label="Negative" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="badge-icons" title="Badge Icons" />

    <x-docs::text>
        Furthermore, you can select an <b>icon</b> to appear on the left side of the label, as well as a
        <b>right-icon</b>, placed to the right of the label, as the name implies. Additionally, you have the flexibility
        to adjust the size of these icons.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-3">
            @verbatim
                <x-badge icon-size="sm" lg icon="share" blue label="Blue" />

                <x-badge icon-size="md" lg icon="wallet" lime label="Lime" />

                {{-- Here you can remove the icon-size too, since it is the same as the size --}}
                <x-badge icon-size="lg" lg right-icon="cpu-chip" purple label="Purple" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="badge-slots" title="Badge Slots" />

    <x-docs::text>
        Should you wish to tailor the elements on both sides of the label, we offer <b>append</b>
        and <b>prepend</b> slots that provide a flexible solution for customization.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap items-center gap-3">
            @verbatim
                <x-badge flat primary label="Prepend">
                    <x-slot name="prepend" class="relative flex items-center w-2 h-2">
                        <span
                            class="absolute inline-flex w-full h-full rounded-full opacity-75 bg-cyan-500 animate-ping"></span>

                        <span class="relative inline-flex w-2 h-2 rounded-full bg-cyan-500"></span>
                    </x-slot>
                </x-badge>

                <x-badge flat primary label="Append">
                    <x-slot name="append" class="relative flex items-center w-2 h-2">
                        <span
                            class="absolute inline-flex w-full h-full rounded-full opacity-75 bg-cyan-500 animate-ping"></span>

                        <span class="relative inline-flex w-2 h-2 rounded-full bg-cyan-500"></span>
                    </x-slot>
                </x-badge>

                <x-badge flat red label="Laravel">
                    <x-slot name="append" class="relative flex items-center w-2 h-2">
                        <badge type="badge">
                            <x-icon name="x-mark" class="w-4 h-4" />
                        </badge>
                    </x-slot>
                </x-badge>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="badge-api" title="Badge API" />

    <x-alert title="Attention!" class="my-4" warning>
        The props [full, right-icon] and slots [prepend, append] are not supported in <b>mini-badge</b> component.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('badge')])
</div>
