<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#toggle" label="Toggle">
                <x-docs::summary.item href="#simple-toggle" label="Simple Toggle" />
                <x-docs::summary.item href="#toggle-with-label" label="Toggle With Label" />
                <x-docs::summary.item href="#toggle-sizes" label="Toggle Sizes" />
            </x-docs::summary.header>

            <x-docs::summary.header href="#toggle-options" label="Toggle Options" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="toggle" title="Toggle" />

    <x-docs::text>
        Toggles allow the user to switch states, for instance: Enable or disable a feature.
    </x-docs::text>

    <x-docs::subtitle id="simple-toggle" title="Simple Toggle" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap gap-4">
                <x-toggle id="input-toggle" wire:model.defer="toggle" sm label="Label" iconless />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-with-label" title="Toggle With Label" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap gap-4">
                <x-toggle id="left-label" label="Label in Left" wire:model.defer="toggle" />
                <x-toggle id="right-label" right-label="Label in Right" wire:model.defer="toggle" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="toggle-sizes" title="Toggle Sizes" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap gap-4">
                <x-toggle id="sm" wire:model.defer="toggle" />
                <x-toggle id="md" md wire:model.defer="toggle" />
                <x-toggle id="lg" lg wire:model.defer="toggle" />
            </div>
        @endverbatim
    </x-docs::code.preview>
</div>
