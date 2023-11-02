<?php

use function Livewire\Volt\{state};

state([
    'model1' => null,
    'model2' => null,
    'model3' => null,
    'model4' => null,
    'model5' => null,
    'model6' => null,
]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#default" label="Datetime Picker Default" />

            <x-docs::summary.header href="#custom-format" label="Datetime Custom Format" />

            <x-docs::summary.header href="#display-format" label="Custom Display Format" />

            <x-docs::summary.header href="#without-timezone" label="Without Timezone" />

            <x-docs::summary.header href="#min-max-dates" label="Min & Max dates" />

            <x-docs::summary.header href="#min-max-times" label="Min & Max times" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="datetime-picker" title="Datetime Picker" />

    <x-docs::text>
        The datetime picker is a versatile component that enhances your project by providing an easy-to-use interface
        for selecting both date and time. It offers customization options for the input value format and user display
        format, allowing you to tailor it to your specific needs. Furthermore, the datetime picker allows you to operate
        without specifying a timezone, offering flexibility in various scenarios. Additionally, it enables you to set a
        start and end date and time, giving you precise control over the range of selections. You can also define the
        minimum and maximum hours as needed, making it a comprehensive and adaptable tool for managing date and
        time-related functionalities in your project.
    </x-docs::text>

    <x-docs::subtitle id="default" title="Datetime Picker Default" />

    <x-docs::text>
        The datetime picker is an easy-to-use component that can greatly enhance your project.
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

    <x-docs::subtitle id="custom-format" title="Datetime Custom Format" />

    <x-docs::text>
        You can customize the format assigned to the input value within the datetime picker.
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
        You also have the option to tailor the date and time format for user display.
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
        Additionally, there's an option to configure the datetime picker without specifying a timezone.
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
        Another feature within the datetime picker component is the ability to choose both a start and end date and time.
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
        You also have the flexibility to set both the minimum and maximum hours.
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
