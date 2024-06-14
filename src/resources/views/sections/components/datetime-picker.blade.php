<?php

use function Livewire\Volt\{state};

state([
    'model1' => '2021-05-22T02:48:00',
    'model2' => null,
    'model3' => null,
    'model4' => null,
    'model5' => null,
    'model6' => [],
    'model7' => null,
    'model8' => '2021-05-22T02:48:00',
    'model9' => '2021-05-22T02:48:00',
    'model10' => '2021-05-22T02:48:00',
    'model11' => '2021-05-22T02:48:00',
    'model12' => '2021-05-22T02:48:00',
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

            <x-docs::summary.header href="#multiple-dates" label="Multiple Dates" />

            <x-docs::summary.header href="#start-of-week" label="Start Of Week" />

            <x-docs::summary.header href="#disabled-dates" label="Disabled Dates" />

            <x-docs::summary.header href="#disabled-years" label="Disabled Years" />

            <x-docs::summary.header href="#disabled-months" label="Disabled Months" />

            <x-docs::summary.header href="#disabled-weekdays" label="Disabled Weekdays" />

            <x-docs::summary.header href="#requires-confirmation" label="Requires Confirmation" />

            <x-docs::summary.header href="#datetime-picker-api" label="Datetime Picker API" />
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
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model1 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model1"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-format" title="Datetime Custom Format" />

    <x-docs::text>
        You can customize the format assigned to the input value within the datetime picker.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model2 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model2"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    parse-format="DD-MM-YYYY HH:mm"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="display-format" title="Custom Display Format" />

    <x-docs::text>
        You also have the option to tailor the date and time format for user display.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model3 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model3"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    display-format="DD-MM-YYYY HH:mm"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="without-timezone" title="Without Timezone" />

    <x-docs::text>
        Additionally, there's an option to configure the datetime picker without specifying a timezone.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model4 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model4"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    without-timezone
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="min-max-dates" title="Min & Max dates" />

    <x-docs::text>
        Another feature within the datetime picker component is the ability to choose both a start and end date and time.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <ul class="mb-2 text-sm dark:text-gray-400">
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
                    wire:model.live="model5"
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    without-timezone
                    :min="now()->subDays(7)->hours(12)->minutes(30)"
                    :max="now()->addDays(7)->hours(12)->minutes(30)"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="multiple-dates" title="Multiple Dates" />

    <x-docs::text>
        The datetime picker component also allows you to select multiple dates.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: @json($model6)
                </span>

                <x-datetime-picker
                    wire:model.live="model6"
                    label="Multiple Dates"
                    placeholder="Appointment Date"
                    without-timezone
                    multiple
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="start-of-week" title="Start Of Week" />

    <x-docs::text>
        The datetime picker component also allows you to set the start of the week.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model7 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model7"
                    label="Start Of Week"
                    placeholder="Appointment Date"
                    start-of-week="1"
                    without-timezone
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="disabled-dates" title="Disabled Dates" />

    <x-docs::text>
        The datetime picker component also allows you to disable specific dates.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model8 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model8"
                    label="Disabled Dates"
                    placeholder="Appointment Date"
                    without-timezone
                    :disabled-dates='["2021-05-21", "2021-05-20"]'
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="disabled-years" title="Disabled Years" />

    <x-docs::text>
        The datetime picker component also allows you to disable specific years.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model9 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model9"
                    label="Disabled Years"
                    placeholder="Appointment Date"
                    without-timezone
                    :disabled-years="[2020, 2022]"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="disabled-months" title="Disabled Months" />

    <x-docs::text>
        The datetime picker component also allows you to disable specific months.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model10 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model10"
                    label="Disabled Months"
                    placeholder="Appointment Date"
                    without-timezone
                    :disabled-months="[3, 5]"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="disabled-weekdays" title="Disabled Weekdays" />

    <x-docs::text>
        The datetime picker component also allows you to disable specific weekdays.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model11 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model11"
                    label="Disabled Weekdays"
                    placeholder="Appointment Date"
                    without-timezone
                    :disabled-weekdays="[0, 1]"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="requires-confirmation" title="Requires Confirmation" />

    <x-docs::text>
        The datetime picker component can be configured to require confirmation before updating the model.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-md px-4 mx-auto sm:px-16">
            @verbatim
                <span class="text-sm dark:text-gray-400">
                    Model: {{ $model12 }}
                </span>

                <x-datetime-picker
                    wire:model.live="model12"
                    label="Requires Confirmation"
                    placeholder="Appointment Date"
                    without-timezone
                    requires-confirmation
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text>
        Read more about
        <x-link href="https://day.js.org/docs/en/display/format" label="day.js" target="_blank" teal sm />
        formats.
    </x-docs::text>

    <x-docs::subtitle id="datetime-picker-api" title="Datetime Picker API" />

    <x-alert title="Attention!" class="my-4" warning>
        The Datetime Picker component receives all options from
        <x-link href="/components/input#input-api" warning sm>Input Component</x-link>.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('datetime-picker')])
</div>
