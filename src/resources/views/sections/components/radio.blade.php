<?php

use function Livewire\Volt\{state};

state(['model1' => null, 'model2' => null, 'model3' => null, 'model4' => null]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#radio-label" label="Radio Label" />

            <x-docs::summary.header href="#radio-sizes" label="Radio Sizes" />

            <x-docs::summary.header href="#radio-rounders" label="Radio Rounders" />

            <x-docs::summary.header href="#radio-colors" label="Radio Colors" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="radio" title="Radio" />

    <x-docs::text>
        The radio component offers a versatile and enhanced user experience with several noteworthy features in its
        latest version. Users have the flexibility to choose between left or right labeling, and the component is
        available in various sizes suitable for radio applications. One of its standout features is the ability to
        employ different rounding methods, allowing for tailored customization to meet specific needs. Additionally, the
        radio component provides a visually appealing touch, offering six default color options, including
        <b>primary</b>, <b>secondary</b>, <b>positive</b>, <b>negative</b>, <b>warning</b>, and <b>info</b>, which can
        be easily customized to suit your preferences.
    </x-docs::text>

    <x-docs::subtitle id="radio-label" title="Radio Label" />

    <x-docs::text>
        Within the radio, you have the flexibility to choose between using the label on either the right or left side.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-radio id="label" label="Label in Left" wire:model="model1" value="label" />

                <x-radio id="right-label" right-label="Label in Right" wire:model="model1" value="right-label" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="radio-sizes" title="Radio Sizes" />

    <x-docs::text>
        Additionally, we offer a diverse selection of sizes suitable for radio applications.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8 items-center">
            @verbatim
                <x-radio id="size-xs" wire:model="model2" value="xs" xs />

                <x-radio id="size-sm" wire:model="model2" value="sm" sm /> {{-- DEFAULT --}}

                <x-radio id="size-md" wire:model="model2" value="md" md />

                <x-radio id="size-lg" wire:model="model2" value="lg" lg />

                <x-radio id="size-xl" wire:model="model2" value="xl" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="radio-rounders" title="Radio Rounders" />

    <x-docs::text>
        A notable enhancement in this latest version is the ability to employ different
        rounding methods in the radio, allowing for customization as needed.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-radio id="rounded-none" wire:model="model3" squared label="None" value="none" xl />

                {{-- CSS: 'rounded-sm' --}}
                <x-radio id="rounded-sm" wire:model="model3" rounded="sm" label="SM" value="sm" xl />

                {{-- CSS: 'rounded' --}}
                <x-radio id="rounded-base" wire:model="model3" rounded="base" label="Base" value="base" xl />

                {{-- CSS: 'rounded-md' --}}
                <x-radio id="rounded-md" wire:model="model3" rounded="md" label="MD" value="md" xl />

                {{-- CSS: 'rounded-lg' --}}
                <x-radio id="rounded-lg" wire:model="model3" rounded="lg" label="LG" value="lg" xl />

                {{-- CSS: 'rounded-xl' --}}
                <x-radio id="rounded-xl" wire:model="model3" rounded="xl" label="XL" value="xl" xl />

                {{-- CSS: 'rounded-2xl' --}}
                <x-radio id="rounded-2xl" wire:model="model3" rounded="2xl" label="2XL" value="2xl" xl />

                {{-- CSS: 'rounded-3xl' --}}
                <x-radio id="rounded-3xl" wire:model="model3" rounded="3xl" label="3XL" value="3xl" xl />

                {{-- CSS: 'rounded-full' - You can use |rounded| too - DEFAULT --}}
                <x-radio id="rounded-full" wire:model="model3" rounded="full" label="Full" value="full" xl />

                {{-- Or Custom --}}
                <x-radio id="rounded-custom" wire:model="model3" rounded="rounded-[0.4rem]" label="Custom" value="custom" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="radio-colors" title="Radio Colors" />

    <x-docs::text>
        Furthermore, you can now customize the interior color of the radio, with six default options available:
        <b>primary</b>, <b>secondary</b>, <b>positive</b>, <b>negative</b>, <b>warning</b>, and <b>info</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-radio id="color-primary" wire:model="model4" label="Primary" primary value="primary" xl />

                <x-radio id="color-secondary" wire:model="model4" label="Secondary" secondary value="secondary" xl />

                <x-radio id="color-positive" wire:model="model4" label="Positive" positive value="positive" xl />

                <x-radio id="color-negative" wire:model="model4" label="Negative" negative value="negative" xl />

                <x-radio id="color-warning" wire:model="model4" label="Warning" warning value="warning" xl />

                <x-radio id="color-info" wire:model="model4" label="Info" info value="info" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
