<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#heroicons" label="Heroicons" />

            <x-docs::summary.header href="#icon-api" label="Icon API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="icon" title="Icon" />

    <x-docs::subtitle id="heroicons" title="Heroicons" />

    <x-docs::text>
        All
        <x-link :href="config('docs.links.heroicons')" target="_blank" teal>Heroicons</x-link>
        icons are available using the component:
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-icon name="home" class="w-5 h-5" />
            <x-icon name="home" class="w-5 h-5" mini />
            <x-icon name="home" class="w-5 h-5" solid />
            <x-icon name="home" class="w-5 h-5" outline />

            <x-heroicons::outline.user />
            <x-heroicons::solid.user />
            <x-heroicons::mini.solid.user class="w-5 h-5" />
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        You can publish the icon configuration and define what will be the default variant
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.config"
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="icon-api" title="Icon API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('icon')])
</div>
