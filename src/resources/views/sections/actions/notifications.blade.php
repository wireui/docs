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

$successNotification = fn() => $this->notification()->send([
    'icon' => 'success',
    'title' => 'Success Notification!',
    'description' => 'This is a description.',
]);

$errorNotification = fn() => $this->notification()->send([
    'icon' => 'error',
    'title' => 'Error Notification!',
    'description' => 'Woops, its an error.',
]);

$infoNotification = fn() => $this->notification()->send([
    'icon' => 'info',
    'title' => 'Info Notification!',
    'description' => 'This is a description.',
]);

$confirmSimple = fn() => $this->notification()->confirm([
    'title' => 'Are you Sure?',
    'description' => 'Save the information?',
    'acceptLabel' => 'Yes, save it',
    'method' => 'save',
    'params' => 'Saved',
]);

$confirmFull = fn() => $this->notification()->confirm([
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

?>

<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#first-steps" label="First Steps" />

            <x-docs::summary.header href="#javascript-notification" label="JavaScript Notification" />

            <x-docs::summary.header href="#livewire-notification" label="Livewire Notification" />

            <x-docs::summary.header href="#confirm-notification" label="Confirm Notification" />

            <x-docs::summary.header href="#notification-events" label="Notification Events" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="notifications" title="Notifications" />

    <x-docs::text>
        The WireUI notification API is a versatile tool that allows you to present alerts, notifications, and action
        confirmations in your web application. These notifications are seamlessly integrated with Livewire events,
        enabling you to harness the full power of Livewire for dynamic interactivity.
        <br><br>
        With this integration, you have the freedom to customize notifications according to your application's
        requirements. You can control various aspects of their appearance, behavior, and functionality to create a user
        experience that aligns perfectly with your project's goals and design. Whether you need simple alerts or more
        complex notifications with custom actions, the WireUI notification API provides you with the means to craft a
        tailored user experience.
    </x-docs::text>

    <x-docs::text.title title="Example use cases:" />

    <x-docs::list>
        <x-docs::list.item text="Alert for successful actions." />

        <x-docs::list.item text="Action confirmation requests." />

        <x-docs::list.item text="User notifications." />

        <x-docs::list.item text="Message notifications." />
    </x-docs::list>

    <x-docs::subtitle id="first-steps" title="First Steps" />

    <x-docs::text>
        Please incorporate the component into the layout.
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <html>

                <body>
                    <x-notifications />

                    {{-- Or With Attributes --}}

                    <x-notifications z-index="z-50" />
                    <x-notifications position="top-start" />
                    <x-notifications position="top" />
                    <x-notifications position="top-end" /> {{-- DEFAULT --}}
                    <x-notifications position="bottom-start" />
                    <x-notifications position="bottom" />
                    <x-notifications position="bottom-end" />
                </body>

            </html>
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="javascript-notification" title="JavaScript Notification" />

    <x-docs::text>
        You can generate notifications directly through JavaScript.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button
                    x-on:click="$wireui.notify({
                    icon: 'success',
                    title: 'Success Notification!',
                    description: 'This is a description.',
                })"
                    positive>
                    Success Notification
                </x-button>

                <x-button
                    x-on:click="$wireui.notify({
                    icon: 'error',
                    title: 'Error Notification!',
                    description: 'Woops, its an error.',
                })"
                    negative>
                    Error Notification
                </x-button>

                <x-button
                    x-on:click="$wireui.notify({
                    icon: 'info',
                    title: 'Info Notification!',
                    description: 'This is a description.',
                })"
                    info>
                    Info Notification
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="livewire-notification" title="Livewire Notification" />

    <x-docs::text>
        You can directly generate notifications from a Livewire Component.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Livewire;

            use Livewire\Component;
            use WireUi\Traits\WireUiActions;

            class MyComponent extends Component
            {
                use WireUiActions;

                public function infoNotification(): void
                {
                    $this->notification()->send([
                        'icon' => 'info',
                        'title' => 'Info Notification!',
                        'description' => 'This is a description.',
                    ]);
                }

                public function errorNotification(): void
                {
                    $this->notification()->send([
                        'icon' => 'error',
                        'title' => 'Error Notification!',
                        'description' => 'Woops, its an error.',
                    ]);
                }

                public function successNotification(): void
                {
                    $this->notification()->send([
                        'icon' => 'success',
                        'title' => 'Success Notification!',
                        'description' => 'This is a description.',
                    ]);
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button wire:click="successNotification" positive>
                    Success Notification
                </x-button>

                <x-button wire:click="errorNotification" negative>
                    Error Notification
                </x-button>

                <x-button wire:click="infoNotification" info>
                    Info Notification
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="confirm-notification" title="Confirm Notification" />

    <x-docs::text>
        You might also need to request user confirmation for a specific action. The Notifications
        API provides a dedicated method for this purpose. Check out the example below.
        <br><br>
        You can create a confirmation notification using Blade.
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
                    $this->notification()->confirm([
                        'title' => 'Are you Sure?',
                        'description' => 'Save the information?',
                        'acceptLabel' => 'Yes, save it',
                        'method' => 'save',
                        'params' => 'Saved',
                    ]);
                }

                public function confirmFull(): void
                {
                    $this->notification()->confirm([
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
        You can generate a confirmation notification using JavaScript.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex justify-center space-x-4">
            @verbatim
                <x-button
                    x-on:click="$wireui.confirmNotification({
                    title: 'Are you Sure?',
                    description: 'Save the information?',
                    icon: 'question',
                    acceptLabel: 'Yes, save it',
                    method: 'save',
                    params: 'Saved',
                })"
                    info>
                    Confirm Simple
                </x-button>

                <x-button
                    x-on:click="$wireui.confirmNotification({
                    title: 'Are you Sure?',
                    description: 'Save the information?',
                    icon: 'question',
                    accept: {
                        label: 'Yes, save it',
                        execute: () => window.$wireui.notify({
                            'title': 'You confirmed',
                            'icon': 'success'
                        })
                    },
                    reject: {
                        label: 'No, cancel',
                        execute: () => window.$wireui.notify({
                            'title': 'You not confirmed',
                            'icon': 'error'
                        })
                    }
                })"
                    info>
                    Confirm Full
                </x-button>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="notification-events" title="Notification Events" />

    <x-docs::text>
        Notifications can come with three events: onClose, onDismiss, and onTimeout.
        Each event will trigger when its corresponding action occurs.
    </x-docs::text>

    <x-docs::text.title title="Events:" />

    <x-docs::list>
        <x-docs::list.item>
            The <b>onClose</b> event will be triggered whenever the notification is removed, whether
            it's due to a timer expiration, user-initiated closure, or clicking on an action.
        </x-docs::list.item>

        <x-docs::list.item>
            The <b>onDismiss</b> event will be activated when the user explicitly dismisses the notification.
        </x-docs::list.item>

        <x-docs::list.item>
            The <b>onTimeout</b> event will be fired each time the notification's timer runs out.
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::text>
        You can create events using JavaScript by employing a closure.
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
        Alternatively, you can utilize these events to trigger actions on the Livewire
        Component, and in this scenario, having the component ID is essential.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            window.$wireui.notify({
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
        You can also employ events for notifications generated by the Livewire Component.
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
                    $this->notification()->send([
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
</div>
