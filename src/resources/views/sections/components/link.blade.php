<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#simple-link" label="Simple Link" />

            <x-docs::summary.header href="#link-sizes" label="Link Sizes" />

            <x-docs::summary.header href="#link-underlines" label="Link Underlines" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="link" title="Link" />

    <x-docs::text>
        Link components can be customized in various ways, including specifying the link text, defining the target URL,
        and applying different visual styles such as colors, underlines, and text sizes. They serve as an essential tool
        for creating navigation menus, buttons, hyperlinks, and interactive elements, enabling a seamless and intuitive
        user experience by connecting various parts of a digital interface. Link components are commonly used in website
        menus, content sections, and interactive user interfaces to provide users with a means to access different parts
        of a website or application.
    </x-docs::text>

    <x-docs::subtitle id="simple-link" title="Simple Link" />

    <x-docs::text>
        Creating a link is straightforward: just specify a label, an href, and select a color. You can take advantage of
        our comprehensive support for all colors in the Tailwind palette.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col items-center space-y-4">
            @verbatim
                <x-link label="Primary" href="#" />

                <x-link label="Secondary" href="#" secondary />

                <x-link label="Rose" href="#" rose />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="link-sizes" title="Link Sizes" />

    <x-docs::text>
        When it comes to sizing options for links, you can choose from
        the following: <b>sm</b>, <b>md</b>, and <b>lg</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col items-center space-y-4">
            @verbatim
                <x-link label="Blue" href="#" blue sm />

                {{-- You can use |size="md"| too - DEFAULT --}}
                <x-link label="Sky" href="#" sky />

                <x-link label="Amber" href="#" amber lg />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="link-underlines" title="Link Underlines" />

    <x-docs::text>
        Another customization option for links is the ability to control
        the underline, and if needed, it can be easily removed.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col items-center space-y-4">
            @verbatim
                <x-link label="Yellow" href="#" yellow underline="always" />

                {{-- DEFAULT --}}
                <x-link label="Green" href="#" green underline="hover" />

                <x-link label="Red" href="#" red underline="none" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
