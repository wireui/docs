<?php

use function Livewire\Volt\{mount};

mount(function () {
    $this->addError('name', 'The name field is required');
    $this->addError('email', 'You must inform a valid email');
    $this->addError('address', 'This address is invalid');
    $this->addError('phone', 'The phone field is required');
});

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#errors-simple" label="Errors Simple" />

            <x-docs::summary.header href="#errors-filtered" label="Errors Filtered" />

            <x-docs::summary.header href="#errors-title" label="Errors Title" />

            <x-docs::summary.header href="#errors-icons" label="Errors Icons" />

            <x-docs::summary.header href="#errors-footer" label="Errors Footer" />

            <x-docs::summary.header href="#errors-api" label="Errors API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="errors" title="Errors" />

    <x-docs::text>
        The errors component offers a versatile solution for handling and presenting errors within your application. It
        allows you to customize default error messages stored in language translation files, rendering errors returned
        by forms with ease, and even filtering these errors using either an array or a string separated by slashes.
        Furthermore, you have the power to adjust the component's header title and, similar to the alert component,
        modify or remove the associated icon as necessary. Additionally, you can assign a footer slot to enhance its
        functionality. In summary, the errors component is a flexible tool for managing and presenting errors in a way
        that suits your specific needs and preferences.
    </x-docs::text>

    <x-alert title="Information!" class="my-4" info>
        You have the option to personalize the default error messages found within the language translation files.
    </x-alert>

    <x-docs::subtitle id="errors-simple" title="Errors Simple" />

    <x-docs::text>
        An effortless approach to utilizing the errors component involves rendering all errors that the form returns.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto">
            @verbatim
                <x-errors />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="errors-filtered" title="Errors Filtered" />

    <x-docs::text>
        The errors component provides the flexibility to filter the errors returned by the form.
        You can specify this filter by using either an array or a string separated by slashes.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto flex flex-col space-y-4">
            @verbatim
                <x-errors only="name|email" />

                <x-errors :only="['address', 'phone']" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="errors-title" title="Errors Title" />

    <x-docs::text>
        You also possess the capability to modify the title that
        will be displayed in the header of the errors component.
    </x-docs::text>

    <x-alert title="Attention!" class="my-4" warning>
        The key <b>{errors}</b> will be replaced with the number of error messages.
        But this replacement does not work if you use the title slot.
    </x-alert>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto">
            @verbatim
                <x-errors title="We found {errors} validation error(s)" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="errors-icons" title="Errors Icons" />

    <x-docs::text>
        Similar to the alert component, you have the flexibility to alter the icon or remove it as needed.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto flex flex-col space-y-4">
            @verbatim
                <x-errors only="name" iconless />

                <x-errors only="email" icon="shield-exclamation" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="errors-footer" title="Errors Footer" />

    <x-docs::text>
        Additionally, drawing inspiration from the alert component, you can designate a footer slot.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto">
            @verbatim
                <x-errors>
                    <x-slot name="footer" class="flex items-center justify-end">
                        <x-button sm label="Close" flat negative />
                    </x-slot>
                </x-errors>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="errors-api" title="Errors API" />

    <x-alert title="Attention!" class="my-4" warning>
        The Errors component receives all options from
        <x-link href="/components/alert#alert-api" warning sm>Alert Component</x-link>.
    </x-alert>

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('errors')])
</div>
