<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#requirements" label="Requirements" />

            <x-docs::summary.header href="#installation" label="Installation" />

            <x-docs::summary.header href="#publishing" label="Publishing" />

            <x-docs::summary.header href="#how-to-use-it" label="How to use it?" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="phosphor-icons" title="Phosphor Icons" />

    <x-docs::text>
        <b class="text-xl">This package doesn't have any WireUI dependency.</b>
        <br><br>
        WireUI Phosphor Icons is a library of icon components to empower your Laravel and Livewire application
        development. Stop creating all icon components from scratch. Get all WireUI Phosphor Icons for free.
        <br><br>
        Phosphor is a flexible icon family for interfaces, diagrams, presentations — whatever, really. — Development
        made by <x-link href="https://phosphoricons.com" target="_blank" teal>Phosphor Icons.</x-link>
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
            composer require wireui/phosphoricons
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="publishing" title="Publishing" />

    <x-docs::text>
        Publish the configuration and views. It's optional.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.phosphoricons.config"
            php artisan vendor:publish --tag="wireui.phosphoricons.views"
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="how-to-use-it" title="How to use it?" />

    <x-docs::text>
        You can find a list of all icons and variants on the
        <x-link href="https://phosphoricons.com" target="_blank" teal>Phosphor Icons</x-link>
        website.
    </x-docs::text>

    <x-docs::text.title title="Available variants:" />

    <x-docs::list>
        <x-docs::list.item text="thin" />

        <x-docs::list.item text="light" />

        <x-docs::list.item text="fill" />

        <x-docs::list.item text="regular" />

        <x-docs::list.item text="duotone" />

        <x-docs::list.item text="bold" />
    </x-docs::list>

    <x-docs::code.block language="blade">
        @verbatim
            <x-icon name="user" />
            <x-icon name="user" duotone />
            <x-icon name="user" variant="fill" />
            <x-icon class="w-5 h-5 text-teal-600" name="user" />

            <x-phosphor.icons::regular.user />
            <x-phosphor.icons::bold.user class="w-5 h-5" />
        @endverbatim
    </x-docs::code.block>
</div>
