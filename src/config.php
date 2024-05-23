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

        'checkbox' => ComponentAPI::checkbox(),

        'color-picker' => ComponentAPI::colorPicker(),

        'currency' => ComponentAPI::currency(),

        'datetime-picker' => ComponentAPI::datetimePicker(),

        // 'dialog' => ComponentAPI::dialog(),

        'dropdown' => ComponentAPI::dropdown(),

        'dropdown-item' => ComponentAPI::dropdownItem(),

        'dropdown-header' => ComponentAPI::dropdownHeader(),

        'errors' => ComponentAPI::errors(),

        'icon' => ComponentAPI::icon(),

        'input' => ComponentAPI::input(),

        'link' => ComponentAPI::link(),

        'maskable' => ComponentAPI::maskable(),

        'modal' => ComponentAPI::modal(),

        'modal-card' => ComponentAPI::modalCard(),

        'native-select' => ComponentAPI::nativeSelect(),

        // 'notifications' => ComponentAPI::notifications(),

        'number' => ComponentAPI::number(),

        'phone' => ComponentAPI::phone(),

        'radio' => ComponentAPI::radio(),

        'select' => ComponentAPI::select(),

        'select-option' => ComponentAPI::selectOption(),

        'select-user-option' => ComponentAPI::selectUserOption(),

        'textarea' => ComponentAPI::textarea(),

        'time-picker' => ComponentAPI::timePicker(),

        'toggle' => ComponentAPI::toggle(),
    ],

];
