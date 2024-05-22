<?php

use WireUi\Docs\Support\ComponentAPI;

return [

    /*
    |--------------------------------------------------------------------------
    | Menu
    |--------------------------------------------------------------------------
     */

    'menu' => [
        'Getting Started' => [
            'Getting Started' => [
                'Installation',
                'CSS Utilities',
                'Troubleshooting',
            ],
        ],

        'Components' => [
            'UI Components' => [
                'Alert',
                'Avatar',
                'Badge',
                'Button',
                'Card',
                'Dropdown',
                'Icon',
                'Link',
                'Modal',
                'Table',
            ],
            'Form Components' => [
                'Checkbox',
                'Color Picker',
                'Currency',
                'Datetime Picker',
                'Errors',
                'Input',
                'Maskable',
                'Native Select',
                'Number',
                'Password',
                'Phone',
                'Radio',
                'Select',
                'Textarea',
                'Time Picker',
                'Toggle',
            ],
        ],

        'Actions' => [
            'Actions' => [
                'Hooks',
                'Dialogs',
                'Notifications',
            ],
        ],

        'Customize' => [
            'Customize' => [
                'Colors',
                'Components',
                'Contribution Guide',
            ],
        ],

        'Packages' => [
            'Packages' => [
                'AlpineJS Hold Directive',
                'Breadcrumbs',
                'Heroicons',
                'Phosphor Icons',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Pages
    |--------------------------------------------------------------------------
     */

    'default_pages' => [
        'getting-started' => 'installation',

        'components' => 'alert',

        'actions' => 'hooks',

        'customize' => 'colors',

        'packages' => 'alpinejs-hold-directive',
    ],

    /*
    |--------------------------------------------------------------------------
    | Components API
    |--------------------------------------------------------------------------
     */

    'components_api' => [
        'alert' => ComponentAPI::alert(),

        'avatar' => ComponentAPI::avatar(),

        'badge' => ComponentAPI::badge(),

        'button' => ComponentAPI::button(),

        'card' => ComponentAPI::card(),

        'dropdown' => ComponentAPI::dropdown(),

        'icon' => ComponentAPI::icon(),

        'link' => ComponentAPI::link(),

        'modal' => ComponentAPI::modal(),

        'checkbox' => ComponentAPI::checkbox(),

        'color-picker' => ComponentAPI::colorPicker(),

        'currency' => ComponentAPI::currency(),

        'datetime-picker' => ComponentAPI::datetimePicker(),

        'errors' => ComponentAPI::errors(),

        'input' => ComponentAPI::input(),

        'maskable' => ComponentAPI::maskable(),

        'native-select' => ComponentAPI::nativeSelect(),

        'number' => ComponentAPI::number(),

        'password' => ComponentAPI::password(),

        'phone' => ComponentAPI::phone(),

        'radio' => ComponentAPI::radio(),

        'select' => ComponentAPI::select(),

        'textarea' => ComponentAPI::textarea(),

        'time-picker' => ComponentAPI::timePicker(),

        'toggle' => ComponentAPI::toggle(),
    ],

];
