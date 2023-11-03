<?php

use function Livewire\Volt\{state};

state(['model1' => [], 'model2' => [], 'model3' => [], 'model4' => []]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#checkbox-label" label="Checkbox Label" />

            <x-docs::summary.header href="#checkbox-sizes" label="Checkbox Sizes" />

            <x-docs::summary.header href="#checkbox-rounders" label="Checkbox Rounders" />

            <x-docs::summary.header href="#checkbox-colors" label="Checkbox Colors" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="checkbox" title="Checkbox" />

    <x-docs::text>
        The checkbox component has been enhanced in the latest version, offering a range of versatile features. You can
        now choose to position the label on either the right or the left side of the checkbox, providing greater
        flexibility in design. Additionally, the component offers various size options to cater to different
        requirements. Another noteworthy addition is the ability to apply different rounding styles to the checkbox,
        allowing for customizable and aesthetically pleasing checkboxes. Furthermore, you have the option to change the
        color within the checkbox, with six default choices: <b>primary</b>, <b>secondary</b>, <b>positive</b>,
        <b>negative</b>, <b>warning</b>, and <b>info</b>. This comprehensive set of features makes the checkbox
        component a highly customizable and visually appealing element in your user interface design.
    </x-docs::text>

    <x-docs::subtitle id="checkbox-label" title="Checkbox Label" />

    <x-docs::text>
        Within the checkbox, you can choose to position the label either on the right or on the left.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-checkbox id="label" label="Label in Left" wire:model="model1" value="label" />

                <x-checkbox id="right-label" right-label="Label in Right" wire:model="model1" value="right-label" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="checkbox-sizes" title="Checkbox Sizes" />

    <x-docs::text>
        We offer a variety of sizes for checkboxes to suit your needs.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8 items-center">
            @verbatim
                <x-checkbox id="size-xs" wire:model="model2" value="xs" xs />

                <x-checkbox id="size-sm" wire:model="model2" value="sm" sm /> {{-- DEFAULT --}}

                <x-checkbox id="size-md" wire:model="model2" value="md" md />

                <x-checkbox id="size-lg" wire:model="model2" value="lg" lg />

                <x-checkbox id="size-xl" wire:model="model2" value="xl" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="checkbox-rounders" title="Checkbox Rounders" />

    <x-docs::text>
        An exciting new feature in this updated version is the option to apply
        different styles of rounding to checkboxes and customize them as needed.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                {{-- CSS: 'rounded-none' - You can use |rounded="none"| too --}}
                <x-checkbox id="rounded-none" wire:model="model3" squared label="None" value="none" xl />

                {{-- CSS: 'rounded-sm' --}}
                <x-checkbox id="rounded-sm" wire:model="model3" rounded="sm" label="SM" value="sm" xl />

                {{-- CSS: 'rounded' --}}
                <x-checkbox id="rounded-base" wire:model="model3" rounded="base" label="Base" value="base" xl />

                {{-- CSS: 'rounded-md' --}}
                <x-checkbox id="rounded-md" wire:model="model3" rounded="md" label="MD" value="md" xl />

                {{-- CSS: 'rounded-lg' --}}
                <x-checkbox id="rounded-lg" wire:model="model3" rounded="lg" label="LG" value="lg" xl />

                {{-- CSS: 'rounded-xl' --}}
                <x-checkbox id="rounded-xl" wire:model="model3" rounded="xl" label="XL" value="xl" xl />

                {{-- CSS: 'rounded-2xl' --}}
                <x-checkbox id="rounded-2xl" wire:model="model3" rounded="2xl" label="2XL" value="2xl" xl />

                {{-- CSS: 'rounded-3xl' --}}
                <x-checkbox id="rounded-3xl" wire:model="model3" rounded="3xl" label="3XL" value="3xl" xl />

                {{-- CSS: 'rounded-full' - You can use |rounded| too - DEFAULT --}}
                <x-checkbox id="rounded-full" wire:model="model3" rounded="full" label="Full" value="full" xl />

                {{-- Or Custom --}}
                <x-checkbox id="rounded-custom" wire:model="model3" rounded="rounded-[0.4rem]" label="Custom" value="custom" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="checkbox-colors" title="Checkbox Colors" />

    <x-docs::text>
        Now, you can also alter the color within the checkbox, with six default options: <b>primary</b>,
        <b>secondary</b>, <b>positive</b>, <b>negative</b>, <b>warning</b>, and <b>info</b>.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-checkbox id="color-primary" wire:model="model4" label="Primary" primary value="primary" xl />

                <x-checkbox id="color-secondary" wire:model="model4" label="Secondary" secondary value="secondary" xl />

                <x-checkbox id="color-positive" wire:model="model4" label="Positive" positive value="positive" xl />

                <x-checkbox id="color-negative" wire:model="model4" label="Negative" negative value="negative" xl />

                <x-checkbox id="color-warning" wire:model="model4" label="Warning" warning value="warning" xl />

                <x-checkbox id="color-info" wire:model="model4" label="Info" info value="info" xl />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
