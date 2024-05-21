<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#requirements" label="Requirements" />

            <x-docs::summary.header href="#installation" label="Installation" />

            <x-docs::summary.header href="#publishing" label="Publishing" />

            <x-docs::summary.header href="#how-to-use-it" label="How to use it?" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="heroicons" title="Heroicons" />

    <x-docs::text>
        <b class="text-xl">This package doesn't have any WireUI dependency.</b>
        <br><br>
        WireUI Heroicons is a library of icons components to empower your Laravel and Livewire application development.
        Stop creating all icons components from scratch. Get all WireUI Heroicons for free.
        <br><br>
        A set of free MIT-licensed high-quality SVG icons for UI development made by
        <x-link href="https://github.com/tailwindlabs" target="_blank" teal>TailwindLabs.</x-link>
        See all
        <x-link href="https://heroicons.com" target="_blank" teal>Heroicons.</x-link>
    </x-docs::text>

    <x-docs::subtitle id="requirements" title="Requirements" />

    <x-docs::text>
        Requirements
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item>
            <x-link href="https://www.php.net" label="PHP 8.1 or higher" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://laravel.com" label="Laravel 9.x or higher" target="_blank" underline="none" teal />
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::subtitle id="installation" title="Installation" />

    <x-docs::text>
        First, you need to install the package via Composer.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            composer require wireui/heroicons
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="publishing" title="Publishing" />

    <x-docs::text>
        Publish the configuration and views. It's optional.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.heroicons.config"
            php artisan vendor:publish --tag="wireui.heroicons.views"
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="how-to-use-it" title="How to use it?" />

    <x-docs::text>
        You can find a list of all icons and variants on the
        <x-link href="https://heroicons.com" target="_blank" teal>Heroicons</x-link>
        website.
    </x-docs::text>

    <x-docs::text.title title="Available variants:" />

    <x-docs::list>
        <x-docs::list.item text="mini.solid" />

        <x-docs::list.item text="solid" />

        <x-docs::list.item text="outline" />
    </x-docs::list>

    <x-docs::code.block language="blade">
        @verbatim
            <x-icon name="user" />
            <x-icon name="user" solid />
            <x-icon name="user" solid mini />
            <x-icon name="user" variant="solid" />
            <x-icon class="w-5 h-5 text-teal-600" name="user" />

            <x-heroicons::outline.user />
            <x-heroicons::solid.user />
            <x-heroicons::mini.solid.user class="w-5 h-5" />
        @endverbatim
    </x-docs::code.block>
</div>
