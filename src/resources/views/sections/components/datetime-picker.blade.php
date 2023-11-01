<?php

use function Livewire\Volt\{state};

state(['model1' => null, 'model2' => null, 'model3' => null, 'model4' => null, 'model5' => null, 'model6' => null]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#datetime-picker" label="Datetime Picker">
                <x-docs::summary.item href="#default" label="Default Datetime Picker" />
                <x-docs::summary.item href="#custom-format" label="Custom Datetime Format" />
                <x-docs::summary.item href="#display-format" label="Custom Display Format" />
                <x-docs::summary.item href="#without-timezone" label="Without Timezone" />
                <x-docs::summary.item href="#min-max-dates" label="Min & Max dates" />
                <x-docs::summary.item href="#min-max-times" label="Min & Max times" />
            </x-docs::summary.header>

            <x-docs::summary.header href="#datetime-picker-options" label="Datetime Picker Options" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="datetime-picker" title="Datetime Picker" />

    <x-docs::text>
        The Datetime Picker component is able to change date and time using timezones or ignoring timezone diff.
        You can use automatic timezone or set a custom timezone to System Timezone or User Timezone.
    </x-docs::text>

    <x-docs::subtitle id="default" title="Default Datetime Picker" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model1 }}</span>

                <x-datetime-picker
                    id="default-picker"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model.live="model1"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-format" title="Custom Datetime Format" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model2 }}</span>

                <x-datetime-picker
                    id="custom-format"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    parse-format="DD-MM-YYYY HH:mm"
                    wire:model.live="model2"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="display-format" title="Custom Display Format" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model3 }}</span>

                <x-datetime-picker
                    id="display-format"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    display-format="DD-MM-YYYY HH:mm"
                    wire:model.live="model3"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="without-timezone" title="Without Timezone" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <span class="dark:text-gray-400">Model: {{ $model4 }}</span>

                <x-datetime-picker
                    id="without-timezone"
                    without-timezone
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model.live="model4"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="min-max-dates" title="Min & Max dates" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <ul class="mb-2 dark:text-gray-400">
                    <li>
                        <b>System Time:</b> {{ now() }} {{ now()->timezoneName }}
                    </li>

                    <li>
                        <b>Min date:</b> now() - 7 days, 12:30 PM
                    </li>

                    <li>
                        <b>Max date:</b> now() + 7 days, 12:30 PM
                    </li>

                    <li>
                        <b>Model:</b> {{ $model5 }}
                    </li>
                </ul>

                <x-datetime-picker
                    id="min-max-dates-input"
                    without-timezone
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model.live="model5"
                    :min="now()->subDays(7)->hours(12)->minutes(30)"
                    :max="now()->addDays(7)->hours(12)->minutes(30)"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="min-max-times" title="Min & Max times" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm px-4 mx-auto sm:px-16">
            @verbatim
                <x-datetime-picker
                    id="min-max-times-input"
                    without-timezone
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    wire:model="model6"
                    min-time="08:00"
                    max-time="18:00"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text>
        Read more about
        <x-link href="https://day.js.org/docs/en/display/format" label="day.js" target="_blank" teal sm />
        formats.
    </x-docs::text>
</div>
