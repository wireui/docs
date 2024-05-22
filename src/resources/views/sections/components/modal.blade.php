<?php

use WireUi\Traits\WireUiActions;
use function Livewire\Volt\{uses, state};

uses([WireUiActions::class]);

$agree = function () {
    $this->modal()->close('simpleModal');

    $this->modal()->close('persistentModal');

    $this->notification()->success('You agreed!');
};

$save = function () {
    $this->modal()->close('cardModal');

    $this->notification()->success('You saved!');
};

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#modal-simple" label="Modal Simple" />

            <x-docs::summary.header href="#modal-blur" label="Modal Blur" />

            <x-docs::summary.header href="#modal-persistent" label="Modal Persistent" />

            <x-docs::summary.header href="#modal-card" label="Modal Card" />

            <x-docs::summary.header href="#modal-events" label="Modal Events" />

            <x-docs::summary.header href="#modal-api" label="Modal API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="modal" title="Modal" />

    <x-docs::text>
        The modal component offers a versatile and user-friendly solution for your interface. It allows you to
        effortlessly create modals by rendering content like cards inside them, accompanied by an intuitive button for
        modal activation. Furthermore, the component provides the flexibility to apply various blur effects to your
        modals, enhancing the visual experience. Additionally, you can monitor and respond to the modal's opening and
        closing events, giving you fine-grained control over its behavior.
    </x-docs::text>

    <x-docs::subtitle id="modal-simple" title="Modal Simple" />

    <x-docs::text>
        A straightforward method for utilizing the modal involves placing a card within it and incorporating a button
        that triggers the modal when clicked.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <x-button label="Open" x-on:click="$openModal('simpleModal')" primary />

            <x-modal name="simpleModal">
                <x-card title="Consent Terms">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <x-slot name="footer" class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />

                        <x-button primary label="I Agree" wire:click="agree" />
                    </x-slot>
                </x-card>
            </x-modal>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="modal-blur" title="Modal Blur" />

    <x-docs::text>
        Additionally, we offer the flexibility to apply various blur effects to our modal.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <x-button label="None" x-on:click="$openModal('blur-none')" primary />

            <x-button label="SM" x-on:click="$openModal('blur-sm')" primary />

            <x-button label="MD" x-on:click="$openModal('blur-md')" primary />

            <x-button label="Base" x-on:click="$openModal('blur-base')" primary />

            <x-button label="LG" x-on:click="$openModal('blur-lg')" primary />

            <x-button label="XL" x-on:click="$openModal('blur-xl')" primary />

            <x-button label="2XL" x-on:click="$openModal('blur-xxl')" primary />

            <x-button label="3XL" x-on:click="$openModal('blur-xxxl')" primary />

            {{-- CSS: 'backdrop-blur-none' - You can use |blur="none"| too - DEFAULT --}}
            <x-modal name="blur-none" blurless>
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-sm' --}}
            <x-modal name="blur-sm" blur="sm">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur' --}}
            <x-modal name="blur-md" blur="md">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-md' --}}
            <x-modal name="blur-base" blur="base">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-lg' --}}
            <x-modal name="blur-lg" blur="lg">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-xl' --}}
            <x-modal name="blur-xl" blur="xl">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-2xl' --}}
            <x-modal name="blur-xxl" blur="2xl">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>

            {{-- CSS: 'backdrop-blur-3xl' --}}
            <x-modal name="blur-xxxl" blur="3xl">
                <x-card title="Blur SM">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </x-card>
            </x-modal>
        @endverbatim
    </x-docs::code.preview>

    <x-alert title="Information!" class="mb-4" info>
        If your project has a custom main element that handles the scroll, you can use the
        <b>main-container</b> attribute in your main element to block the scroll when the modal is opened.
    </x-alert>

    <x-docs::subtitle id="modal-persistent" title="Modal Persistent" />

    <x-docs::text>
        Another alternative is to configure the modal to remain persistent on the screen for the user.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <x-button label="Open" x-on:click="$openModal('persistentModal')" primary />

            <x-modal name="persistentModal" persistent>
                <x-card title="Consent Terms">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <x-slot name="footer" class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />

                        <x-button primary label="I Agree" wire:click="agree" />
                    </x-slot>
                </x-card>
            </x-modal>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="modal-card" title="Modal Card" />

    <x-docs::text>
        Incorporating cards within modals is a widespread practice, and we have a pre-built component designed for this
        purpose.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        @verbatim
            <x-button label="Open" x-on:click="$openModal('cardModal')" primary />

            <x-modal-card title="Edit Customer" name="cardModal">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <x-input label="Name" placeholder="Your full name" />

                    <x-input label="Phone" placeholder="USA phone" />

                    <div class="col-span-1 sm:col-span-2">
                        <x-input label="Email" placeholder="example@mail.com" />
                    </div>

                    <div
                        class="flex items-center justify-center col-span-1 bg-gray-100 shadow-md cursor-pointer sm:col-span-2 dark:bg-secondary-700 rounded-xl h-64">
                        <div class="flex flex-col items-center justify-center">
                            <x-icon name="cloud-arrow-up" class="w-16 h-16 text-blue-600 dark:text-teal-600" />

                            <p class="text-blue-600 dark:text-teal-600">Click or drop files here</p>
                        </div>
                    </div>
                </div>

                <x-slot name="footer" class="flex justify-between gap-x-4">
                    <x-button flat negative label="Delete" x-on:click="close" />

                    <div class="flex gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />

                        <x-button primary label="Save" wire:click="save" />
                    </div>
                </x-slot>
            </x-modal-card>
        @endverbatim
    </x-docs::code.preview>

    <x-alert title="Information!" class="mb-4" info>
        You can use the global function
        <b>$openModal('myModal')</b>
        to open modal from your JavaScript code.
        <br><br>
        You can use the global function
        <b>$closeModal('myModal')</b>
        to close modal from your JavaScript code.
    </x-alert>

    <x-docs::subtitle id="modal-events" title="Modal Events" />

    <x-docs::text>
        With the modal component, you can easily monitor both opening and closing events.
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-modal
                ...
                x-on:open='...'
                x-on:close='...'>

            </x-modal>
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="modal-api" title="Modal API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('modal')])
</div>
