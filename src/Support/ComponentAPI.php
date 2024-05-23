<?php

namespace WireUi\Docs\Support;

class ComponentAPI
{
    public static function alert(): array
    {
        return [
            'props' => [
                'icon' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'title' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'shadow' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'padding' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'variant' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'iconless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'shadowless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'header' => [
                    'description' => 'Slot to add content to the header.',
                ],
                'title' => [
                    'description' => 'Slot to add content to the title.',
                ],
                'action' => [
                    'description' => 'Slot to add content to the actions.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'footer' => [
                    'description' => 'Slot to add content to the footer.',
                ],
            ],
        ];
    }

    public static function avatar(): array
    {
        return [
            'props' => [
                'alt' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'src' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'border' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'icon-size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'borderless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
            ],
        ];
    }

    public static function badge(): array
    {
        return [
            'props' => [
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'full' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'variant' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'icon-size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'prepend' => [
                    'description' => 'Slot to add content before the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'append' => [
                    'description' => 'Slot to add content after the label.',
                ],
            ],
        ];
    }

    public static function button(): array
    {
        return [
            'props' => [
                'full' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'href' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'variant' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'icon-size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'wire-load-enabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'use-validation-colors' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'prepend' => [
                    'description' => 'Slot to add content before the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'append' => [
                    'description' => 'Slot to add content after the label.',
                ],
            ],
        ];
    }

    public static function card(): array
    {
        return [
            'props' => [
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'title' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'shadow' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'padding' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'shadowless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'header' => [
                    'description' => 'Slot to add content to the header.',
                ],
                'title' => [
                    'description' => 'Slot to add content to the title.',
                ],
                'action' => [
                    'description' => 'Slot to add content to the actions.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'footer' => [
                    'description' => 'Slot to add content to the footer.',
                ],
            ],
        ];
    }

    public static function checkbox(): array
    {
        return [
            'props' => [
                'id' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'errorless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'invalidated' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'right-label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'with-validation-colors' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'right-label' => [
                    'description' => 'Slot to add content to the right label.',
                ],
                'description' => [
                    'description' => 'Slot to add content to the description.',
                ],
            ],
        ];
    }

    public static function colorPicker(): array
    {
        return [
            'props' => [
                'colors' => [
                    'type' => 'array',
                    'default' => '[]',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'swatch',
                    'required' => 'false',
                ],
                'color-name-as-value' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function currency(): array
    {
        return [
            'props' => [
                'decimal' => [
                    'type' => 'string',
                    'default' => '.',
                    'required' => 'false',
                ],
                'precision' => [
                    'type' => 'number',
                    'default' => '2',
                    'required' => 'false',
                ],
                'thousands' => [
                    'type' => 'string',
                    'default' => ',',
                    'required' => 'false',
                ],
                'emit-formatted' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function datetimePicker(): array
    {
        return [
            'props' => [
                'max' => [
                    'type' => 'Carbon|string|timestamp|null',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'min' => [
                    'type' => 'Carbon|string|timestamp|null',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'interval' => [
                    'type' => 'string|number',
                    'default' => '10',
                    'required' => 'false',
                ],
                'max-time' => [
                    'type' => 'number',
                    'default' => '24',
                    'required' => 'false',
                ],
                'min-time' => [
                    'type' => 'number',
                    'default' => '0',
                    'required' => 'false',
                ],
                'timezone' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'clearable' => [
                    'type' => 'boolean',
                    'default' => 'true',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'calendar',
                    'required' => 'false',
                ],
                'time-format' => [
                    'type' => 'string',
                    'default' => '12',
                    'required' => 'false',
                ],
                'parse-format' => [
                    'type' => 'string',
                    'default' => 'ISO8601',
                    'required' => 'false',
                ],
                'without-time' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'without-tips' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'user-timezone' => [
                    'type' => 'string',
                    'default' => 'real user timezone',
                    'required' => 'false',
                ],
                'display-format' => [
                    'type' => 'string',
                    'default' => 'localeFormat',
                    'required' => 'false',
                ],
                'without-timezone' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function dialogs(): array
    {
        return [];
    }

    public static function dropdown(): array
    {
        return [
            'props' => [
                'icon' => [
                    'type' => 'string',
                    'default' => 'ellipsis-vertical',
                    'required' => 'false',
                ],
                'width' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'height' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'position' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'persistent' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'trigger' => [
                    'description' => 'Slot to add content to the trigger.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
            ],
        ];
    }

    public static function dropdownItem(): array
    {
        return [
            'props' => [
                'icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'separator' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
            ],
        ];
    }

    public static function dropdownHeader(): array
    {
        return [
            'props' => [
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'separator' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
            ],
        ];
    }

    public static function errors(): array
    {
        return [
            'props' => [
                'only' => [
                    'type' => 'array',
                    'default' => '[]',
                    'required' => 'false',
                ],
                'title' => [
                    'type' => 'string',
                    'default' => "trans('wireui::messages.errors.title')",
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function icon(): array
    {
        return [
            'props' => [
                'name' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'true',
                ],
                'variant' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function input(): array
    {
        return [
            'props' => [
                'id' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'name' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'corner' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'prefix' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'shadow' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'suffix' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'padding' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'errorless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'shadowless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'invalidated' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'with-error-icon' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'with-validation-colors' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'corner' => [
                    'description' => 'Slot to add content to the corner.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'prefix' => [
                    'description' => 'Slot to add content to the prefix.',
                ],
                'suffix' => [
                    'description' => 'Slot to add content to the suffix.',
                ],
                'prepend' => [
                    'description' => 'Slot to add content before the input.',
                ],
                'append' => [
                    'description' => 'Slot to add content after the input.',
                ],
                'description' => [
                    'description' => 'Slot to add content to the description.',
                ],
            ],
        ];
    }

    public static function link(): array
    {
        return [
            'props' => [
                'href' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'underline' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
            ],
        ];
    }

    public static function maskable(): array
    {
        return [
            'props' => [
                'mask' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'true',
                ],
                'emit-formatted' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function modal(): array
    {
        return [
            'props' => [
                'blur' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'name' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'show' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'type' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'align' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'width' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'spacing' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'z-index' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'blurless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'persistent' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
            ],
            'events' => [
                'open' => [
                    'description' => 'Event emitted when the modal is opened.',
                ],
                'close' => [
                    'description' => 'Event emitted when the modal is closed.',
                ],
            ],
        ];
    }

    public static function modalCard(): array
    {
        return [
            'props' => [
                'hide-close' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function nativeSelect(): array
    {
        return [
            'props' => [
                'options' => [
                    'type' => 'Collection|array',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'placeholder' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'flip-options' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'option-label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'option-value' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'empty-message' => [
                    'type' => 'string',
                    'default' => "trans('wireui::messages.empty_options')",
                    'required' => 'false',
                ],
                'option-key-value' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'hide-empty-message' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'option-description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function notifications(): array
    {
        return [];
    }

    public static function number(): array
    {
        return [
            'props' => [
                'icon' => [
                    'type' => 'string',
                    'default' => 'minus',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'plus',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function phone(): array
    {
        return [
            'props' => [
                'mask' => [
                    'type' => 'string',
                    'default' => "['(###) ###-####', '+# ### ###-####', '+## ## ####-####']",
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function radio(): array
    {
        return [
            'props' => [
                'id' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'errorless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'invalidated' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'right-label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'with-validation-colors' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'right-label' => [
                    'description' => 'Slot to add content to the right label.',
                ],
                'description' => [
                    'description' => 'Slot to add content to the description.',
                ],
            ],
        ];
    }

    public static function select(): array
    {
        return [
            'props' => [
                'shadow' => [
                    'type' => 'string',
                    'default' => 'base',
                    'required' => 'false',
                ],
                'options' => [
                    'type' => 'Collection|array',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'template' => [
                    'type' => 'string|array',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'clearable' => [
                    'type' => 'boolean',
                    'default' => 'true',
                    'required' => 'false',
                ],
                'async-data' => [
                    'type' => 'string|AsyncDataConfig',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'chevron-up-down',
                    'required' => 'false',
                ],
                'searchable' => [
                    'type' => 'boolean',
                    'default' => 'true',
                    'required' => 'false',
                ],
                'multiselect' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'placeholder' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'always-fetch' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'flip-options' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'option-label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'option-value' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'empty-message' => [
                    'type' => 'string',
                    'default' => "trans('wireui::messages.empty_options')",
                    'required' => 'false',
                ],
                'option-key-value' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'hide-empty-message' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'option-description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'without-items-count' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'min-items-for-search' => [
                    'type' => 'number',
                    'default' => '11',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'beforeOptions' => [
                    'description' => 'Slot to add content before the options.',
                ],
                'afterOptions' => [
                    'description' => 'Slot to add content after the options.',
                ],
            ],
            'events' => [
                'open' => [
                    'description' => 'Event emitted when the dropdown is opened.',
                ],
                'close' => [
                    'description' => 'Event emitted when the dropdown is closed.',
                ],
                'selected' => [
                    'description' => 'Event emitted when an option is selected.',
                ],
                'clear' => [
                    'description' => 'Event emitted when the selected option is cleared.',
                ],
            ],
        ];
    }

    public static function selectOption(): array
    {
        return [
            'props' => [
                'value' => [
                    'type' => 'any',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'option' => [
                    'type' => 'Model|stdClass|array|null',
                    'default' => '[]',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function selectUserOption(): array
    {
        return [
            'props' => [
                'src' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'true',
                ],
                'value' => [
                    'type' => 'any',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'option' => [
                    'type' => 'Model|stdClass|array|null',
                    'default' => '[]',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function textarea(): array
    {
        return [
            'props' => [
                'cols' => [
                    'type' => 'string',
                    'default' => 'auto',
                    'required' => 'false',
                ],
                'rows' => [
                    'type' => 'number',
                    'default' => '4',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function timePicker(): array
    {
        return [
            'props' => [
                'right-icon' => [
                    'type' => 'string',
                    'default' => 'clock',
                    'required' => 'false',
                ],
                'military-time' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'without-seconds' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
        ];
    }

    public static function toggle(): array
    {
        return [
            'props' => [
                'id' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'color' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'rounded' => [
                    'type' => 'string',
                    'default' => 'CONFIG',
                    'required' => 'false',
                ],
                'disabled' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'readonly' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'errorless' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'invalidated' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
                'right-label' => [
                    'type' => 'string',
                    'default' => 'null',
                    'required' => 'false',
                ],
                'with-validation-colors' => [
                    'type' => 'boolean',
                    'default' => 'false',
                    'required' => 'false',
                ],
            ],
            'slots' => [
                'label' => [
                    'description' => 'Slot to add content to the label.',
                ],
                'slot' => [
                    'description' => 'Slot to add content to the body.',
                ],
                'right-label' => [
                    'description' => 'Slot to add content to the right label.',
                ],
                'description' => [
                    'description' => 'Slot to add content to the description.',
                ],
            ],
        ];
    }
}
