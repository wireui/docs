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

        'Advanced' => [
            'Advanced' => [
                'Hooks',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Pages
    |--------------------------------------------------------------------------
     */

    'default_pages' => [
        'advanced' => 'hooks',

        'actions' => 'dialogs',

        'components' => 'alert',

        'customize' => 'colors',

        'getting-started' => 'installation',
    ],

    /*
    |--------------------------------------------------------------------------
    | Components API
    |--------------------------------------------------------------------------
     */

    'components_api' => [
        'select' => ComponentAPI::select(),
    ],

];
