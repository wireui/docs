<?php

use function Livewire\Volt\{state};

state([
    'model1' => null,
    'model2' => null,
    'model3' => null,
]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#am-pm" label="AM/PM Time Picker" />

            <x-docs::summary.header href="#24-hours" label="24H Time Picker" />

            <x-docs::summary.header href="#without-seconds" label="Without Seconds" />

            <x-docs::summary.header href="#time-picker-api" label="Time Picker API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="time-picker" title="Time Picker" />

    <x-docs::text>
        The time picker component offers a versatile and user-friendly way to select and customize the time display. It
        provides options for choosing between the standard 24-hour format and the AM/PM 12-hour format, along with the
        flexibility to set the minute interval to suit your specific needs. This component allows for precise and
        tailored time selection, making it a valuable tool for a wide range of applications.
    </x-docs::text>

    <x-alert title="Attention!" class="my-4" warning>
        If you are using a model property bind <b>(wire:model="appointment.datetime")</b>
        as datetime, you must set model as <b>.defer</b> because datetime <b>cannot have empty time</b>,
        and automatically set 00:00 to time
    </x-alert>

    <x-docs::subtitle id="am-pm" title="AM/PM Time Picker" />

    <x-docs::text>
        In the time picker, you can choose the AM/PM format.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model1 }}</span>

                <x-time-picker
                    id="am-pm-time"
                    wire:model.live="model1"
                    label="AM/PM"
                    placeholder="12:00 AM"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="24-hours" title="24H Time Picker" />

    <x-docs::text>
        Furthermore, there's the option to utilize the 24-hour standard time format.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model2 }}</span>

                <x-time-picker
                    id="24-hours"
                    wire:model.live="model2"
                    label="24 Hours"
                    placeholder="22:30"
                    military-time
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="without-seconds" title="Without Seconds" />

    <x-docs::text>
        Another option is to use the time picker without seconds.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model3 }}</span>

                <x-time-picker
                    id="interval"
                    wire:model.live="model3"
                    label="AM/PM"
                    placeholder="12:00 AM"
                    without-seconds
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="time-picker-api" title="Time Picker API" />

    <x-alert title="Attention!" class="my-4" warning>
        The Time Picker component receives all options from
        <x-link href="/components/input#input-api" warning sm>Input Component</x-link>.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('time-picker')])
</div>
