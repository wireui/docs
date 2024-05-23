<?php

use function Livewire\Volt\{uses};
use WireUi\Traits\WireUiActions;

uses([WireUiActions::class]);

$save = fn() => $this->notification()->send([
    'icon' => 'success',
    'title' => 'You confirmed!',
]);

$cancel = fn() => $this->notification()->send([
    'icon' => 'error',
    'title' => 'You not confirmed!',
]);

$delete = fn() => $this->notification()->send([
    'icon' => 'warning',
    'title' => 'You deleted!',
]);

$successDialog = fn() => $this->dialog()->show([
    'icon' => 'success',
    'title' => 'Success Dialog!',
    'description' => 'This is a description.',
]);

$errorDialog = fn() => $this->dialog()->show([
    'icon' => 'error',
    'title' => 'Error Dialog!',
    'description' => 'Woops, its an error.',
]);

$infoDialog = fn() => $this->dialog()->show([
    'icon' => 'info',
    'title' => 'Info Dialog!',
    'description' => 'This is a description.',
]);

$confirmSimple = fn() => $this->dialog()->confirm([
    'title' => 'Are you Sure?',
    'description' => 'Save the information?',
    'acceptLabel' => 'Yes, save it',
    'method' => 'save',
    'params' => 'Saved',
]);

$confirmFull = fn() => $this->dialog()->confirm([
    'title' => 'Are you Sure?',
    'description' => 'Save the information?',
    'icon' => 'question',
    'accept' => [
        'label' => 'Yes, save it',
        'method' => 'save',
        'params' => 'Saved',
    ],
    'reject' => [
        'label' => 'No, cancel',
        'method' => 'cancel',
    ],
]);

$customDialog = fn() => $this->dialog()
    ->id('custom')
    ->show([
        'icon' => 'question',
    ]);

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#first-steps" label="First Steps" />

            <x-docs::summary.header href="#javascript-dialog" label="JavaScript Dialog" />

            <x-docs::summary.header href="#livewire-dialog" label="Livewire Dialog" />

            <x-docs::summary.header href="#confirm-dialog" label="Confirm Dialog" />

            <x-docs::summary.header href="#confirm-directive" label="Confirm Directive" />

            <x-docs::summary.header href="#dialog-events" label="Dialog Events" />

            <x-docs::summary.header href="#custom-dialog" label="Custom Dialog" />

            <x-docs::summary.header href="#dialogs-api" label="Dialogs API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="dialogs" title="Dialogs" />

    <x-docs::text>
        The WireUI Dialog API is a versatile tool designed to handle a wide range of alert and confirmation dialog
        requirements. These dialogs seamlessly integrate with Livewire events, making them an ideal choice for
        interactive user experiences. With this API, you can tailor dialogs to your specific needs, customizing elements
        such as titles, descriptions, and even incorporating your own code within designated slots. This flexibility
        empowers you to create engaging and user-friendly dialog interfaces for your web applications.
    </x-docs::text>

    <x-docs::text.title title="Example use cases:" />

    <x-docs::list>
        <x-docs::list.item text="Display an alert for successful actions." />

        <x-docs::list.item text="Request user confirmation for a specific action." />
    </x-docs::list>

    <x-docs::subtitle id="first-steps" title="First Steps" />

    <x-docs::text>
        Firstly, integrate the component into the layout.
    </x-docs::text>

    <x-alert title="Information!" class="my-4" info>
        The <b>dialog</b> offers a comprehensive range of <b>modal</b> options, allowing
        you to define settings either globally or for individual elements.
    </x-alert>

    <x-docs::code.block language="blade">
        @verbatim
            <html>

                <body>
                    <x-dialog />
                    or
                    <x-dialog z-index="z-50" blur="md" align="center" />
                    ...
                </body>

            </html>
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="javascript-dialog" title="JavaScript Dialog" />

    <x-docs::text>
        Dialogs can be easily generated using JavaScript.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button
                    x-on:click="$wireui.dialog({
                    icon: 'success',
                    title: 'Success Dialog!',
                    description: 'This is a description.',
                })"
                    positive>
                    Success Dialog
                </x-button>

                <x-button
                    x-on:click="$wireui.dialog({
                    icon: 'error',
                    title: 'Error Dialog!',
                    description: 'Woops, its an error.',
                })"
                    negative>
                    Error Dialog
                </x-button>

                <x-button
                    x-on:click="$wireui.dialog({
                    icon: 'info',
                    title: 'Info Dialog!',
                    description: 'This is a description.',
                })"
                    info>
                    Info Dialog
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="livewire-dialog" title="Livewire Dialog" />

    <x-docs::text>
        Dialogs can be directly generated from a Livewire Component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Livewire;

            use Livewire\Component;
            use WireUi\Traits\WireUiActions;

            class MyComponent extends Component
            {
                use WireUiActions;

                public function infoDialog(): void
                {
                    $this->dialog()->show([
                        'icon' => 'info',
                        'title' => 'Info Dialog!',
                        'description' => 'This is a description.',
                    ]);
                }

                public function errorDialog(): void
                {
                    $this->dialog()->show([
                        'icon' => 'error',
                        'title' => 'Error Dialog!',
                        'description' => 'Woops, its an error.',
                    ]);
                }

                public function successDialog(): void
                {
                    $this->dialog()->show([
                        'icon' => 'success',
                        'title' => 'Success Dialog!',
                        'description' => 'This is a description.',
                    ]);
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button wire:click="successDialog" positive>
                    Success Dialog
                </x-button>

                <x-button wire:click="errorDialog" negative>
                    Error Dialog
                </x-button>

                <x-button wire:click="infoDialog" info>
                    Info Dialog
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="confirm-dialog" title="Confirm Dialog" />

    <x-docs::text>
        If you need to request user confirmation for a specific action, the dialog API provides a
        dedicated method for this purpose. Refer to the example below for guidance.
        <br><br>
        You can generate a confirmation notification using the Livewire Component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Livewire;

            use Livewire\Component;
            use WireUi\Traits\WireUiActions;

            class MyComponent extends Component
            {
                use WireUiActions;

                public function confirmSimple(): void
                {
                    $this->dialog()->confirm([
                        'title' => 'Are you Sure?',
                        'description' => 'Save the information?',
                        'acceptLabel' => 'Yes, save it',
                        'method' => 'save',
                        'params' => 'Saved',
                    ]);
                }

                public function confirmFull(): void
                {
                    $this->dialog()->confirm([
                        'title' => 'Are you Sure?',
                        'description' => 'Save the information?',
                        'icon' => 'question',
                        'accept' => [
                            'label' => 'Yes, save it',
                            'method' => 'save',
                            'params' => 'Saved',
                        ],
                        'reject' => [
                            'label' => 'No, cancel',
                            'method' => 'cancel',
                        ],
                    ]);
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button wire:click="confirmSimple" info>
                    Confirm Simple
                </x-button>

                <x-button wire:click="confirmFull" info>
                    Confirm Full
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text>
        Generate a confirmation notification using JavaScript.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button
                    x-on:click="$wireui.confirmDialog({
                    title: 'Are you Sure?',
                    description: 'Save the information?',
                    acceptLabel: 'Yes, save it',
                    method: 'save',
                    params: 'Saved',
                })"
                    info>
                    Confirm Simple
                </x-button>

                <x-button
                    x-on:click="$wireui.confirmDialog({
                    title: 'Are you Sure?',
                    description: 'Save the information?',
                    icon: 'question',
                    accept: {
                        label: 'Yes, save it',
                        execute: () => window.$wireui.notify({
                            'icon': 'success',
                            'title': 'You confirmed',
                        })
                    },
                    reject: {
                        label: 'No, cancel',
                        execute: () => window.$wireui.notify({
                            'icon': 'error',
                            'title': 'You not confirmed',
                        })
                    }
                })"
                    info>
                    Confirm Full
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="confirm-directive" title="Confirm Directive" />

    <x-docs::text>
        Alternatively, you can employ an HTML directive to construct a confirmation dialog.
        Please note that Blade components do not support <b>@bladeDirectives</b>.
        <br><br>
        Instead, you can implement them within an Alpine.js component.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center">
            @verbatim
                <div x-data="{ title: 'Sure Delete?' }">
                    <x-button warning label="Delete"
                        x-on:confirm="{
                            title,
                            icon: 'warning',
                            method: 'delete',
                            params: 1
                        }" />
                </div>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text>
        Alternatively, you can employ it within pure HTML.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center">
            @verbatim
                <x-button warning label="Delete"
                    x-on:confirm="{
                        title: 'Sure Delete?',
                        icon: 'warning',
                        method: 'delete',
                        params: 1
                    }" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dialog-events" title="Dialog Events" />

    <x-docs::text>
        Dialogs can feature three distinct events: onClose, onDismiss, and onTimeout.
        Each of these events will trigger when their respective conditions are met.
    </x-docs::text>

    <x-docs::text.title title="Events:" />

    <x-docs::list>
        <x-docs::list.item>
            The <b>onClose</b> event is triggered whenever the dialog is closed, whether
            it's due to a timeout, user-initiated closure, or clicking an action.
        </x-docs::list.item>

        <x-docs::list.item>
            The <b>onDismiss</b> event is activated when the user dismisses the dialog.
        </x-docs::list.item>

        <x-docs::list.item>
            The <b>onTimeout</b> event is initiated each time the dialog's timer expires.
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::text>
        You can establish events in JavaScript by utilizing closures.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            {
                onClose: () => alert('onClose is fired'),
                onDismiss: () => alert('onDismiss is fired'),
                onTimeout: () => alert('onTimeout is fired'),
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        Alternatively, you can employ these events to trigger actions on the
        Livewire Component, in which case the component ID is essential.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            window.$wireui.dialog({
                ...
                onClose: {
                    method: 'firedEvent',
                    params: 'onClose'
                },
                onDismiss: {
                    method: 'firedEvent',
                    params: { event: 'onDismiss'}
                },
                onTimeout: {
                    method: 'firedEvent',
                    params: ['onTimeout', 'more value']
                },
            }, livewireComponentId)
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        Events can also serve to facilitate notifications generated by the Livewire Component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Livewire;

            use Livewire\Component;
            use WireUi\Traits\WireUiActions;

            class MyComponent extends Component
            {
                use WireUiActions;

                public function save(): void
                {
                    $this->dialog()->show([
                        ...

                        'onClose' => [
                            'method' => 'firedEvent',
                            'params' => 'onClose',
                        ],
                        'onDismiss' => [
                            'method' => 'firedEvent',
                            'params' => ['event' => 'onDismiss'],
                        ],
                        'onTimeout' => [
                            'method' => 'firedEvent',
                            'params' => ['onTimeout', 'more value'],
                        ],
                    ]);
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="custom-dialog" title="Custom Dialog" />

    <x-docs::text>
        You have the flexibility to create dialogs with custom titles,
        descriptions, or include any code within the designated slot.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Livewire;

            use Livewire\Component;
            use WireUi\Traits\WireUiActions;

            class MyComponent extends Component
            {
                use WireUiActions;

                public function customDialog(): void
                {
                    $this->dialog()->id('custom')->show([
                        'icon' => 'question',
                    ]);
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-dialog id="custom" title="User information" description="Complete your profile, give your name">
                    <x-input label="What's your name?" placeholder="your name bro" x-model="name" />
                </x-dialog>

                <x-button wire:click="customDialog" info>
                    Show via Livewire
                </x-button>

                <x-button
                    x-on:click="$wireui.confirmDialog({
                    id: 'custom',
                    icon: 'question',
                    accept: {
                        label: 'Yes, save it',
                        execute: () => window.$wireui.notify({
                            'icon': 'success',
                            'title': 'Profile name saved',
                            'description': `Good by, ${name}`,
                        })
                    },
                    reject: {
                        label: 'No, cancel',
                        execute: () => window.$wireui.notify({
                            'icon': 'error',
                            'title': 'You not confirmed',
                            'description': `Good by, ${name}`,
                        })
                    }
                })"
                    info>
                    Show via Alpine
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dialogs-api" title="Dialogs API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('dialogs')])
</div>
