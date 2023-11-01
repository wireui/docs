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
            <x-docs::summary.header href="#all-errors" label="All Errors" />

            <x-docs::summary.header href="#filtered-errors" label="Filtered Errors" />

            <x-docs::summary.header href="#custom-title" label="Custom Title" />

            <x-docs::summary.header href="#change-icon-and-borderless" label="Change Icon and Borderless" />

            <x-docs::summary.header href="#without-icon" label="Without Icon" />

            <x-docs::summary.header href="#error-footer" label="Error Footer" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="errors" title="Errors" />

    <x-docs::text>
        The Errors component is useful for displaying errors in a friendly way.
        <br><br>
        We can find this component often combined with the
        <x-link href="/docs/input" teal>inputs</x-link>
        component to report validation errors.
    </x-docs::text>

    <x-alert title="Information!" class="my-4" info>
        You can customize the default error messages in the language translation files.
    </x-alert>

    <x-docs::subtitle id="all-errors" title="All Errors" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto">
            @verbatim
                <x-errors color="primary">
                    <x-slot name="title">
                        AAAAA <b>{errors}</b> BBBBB
                    </x-slot>
                </x-errors>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="filtered-errors" title="Filtered Errors" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="max-w-lg mx-auto">
                <x-errors only="name" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-title" title="Custom Title" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="max-w-lg mx-auto">
                <x-errors title="We found {errors} validation error(s)" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-alert class="mb-4" info>
        <x-slot name="title">
            Tip: The key <b>{errors}</b> will be replaced with the number of error messages.
        </x-slot>
    </x-alert>

    <x-docs::subtitle id="change-icon-and-borderless" title="Change Icon and Borderless" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="max-w-lg mx-auto">
                <x-errors icon="x-mark" borderless />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="without-icon" title="Without Icon" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="max-w-lg mx-auto">
                <x-errors iconless />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="error-footer" title="Error Footer" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="max-w-lg mx-auto">
                <x-errors>
                    <x-slot name="footer" class="flex items-center justify-end">
                        <x-button sm label="Close" flat negative />
                    </x-slot>
                </x-errors>
            </div>
        @endverbatim
    </x-docs::code.preview>
</div>
