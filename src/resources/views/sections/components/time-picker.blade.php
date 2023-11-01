<?php

use function Livewire\Volt\{state};

state(['model1' => null, 'model2' => null, 'model3' => null]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#am-pm" label="AM/PM Time Picker" />

            <x-docs::summary.header href="#24-hours" label="24H Time Picker" />

            <x-docs::summary.header href="#custom-interval" label="Custom Interval" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="time-picker" title="Time Picker" />

    <x-docs::text>
        The Time Picker component is able to change time in datetime, or change only time.
    </x-docs::text>

    <x-alert title="Attention!" class="my-4" warning>
        If you are using a model property bind <b>(wire:model="appointment.datetime")</b>
        as datetime, you must set model as <b>.defer</b> because datetime <b>cannot have empty time</b>,
        and automatically set 00:00 to time
    </x-alert>

    <x-docs::subtitle id="am-pm" title="AM/PM Time Picker" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <x-time-picker id="am-pm-time" wire:model="model1" label="AM/PM" placeholder="12:00 AM" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="24-hours" title="24H Time Picker" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <x-time-picker id="24-hours" wire:model="model2" label="24 Hours" placeholder="22:30" format="24" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-interval" title="Custom Interval" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <x-time-picker id="interval" wire:model="model3" label="AM/PM" placeholder="12:00 AM" interval="30" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
