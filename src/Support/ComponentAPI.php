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
        return [];
    }

    public static function dropdown(): array
    {
        return [];
    }

    public static function icon(): array
    {
        return [];
    }

    public static function link(): array
    {
        return [];
    }

    public static function modal(): array
    {
        return [];
    }

    public static function checkbox(): array
    {
        return [];
    }

    public static function colorPicker(): array
    {
        return [];
    }

    public static function currency(): array
    {
        return [];
    }

    public static function datetimePicker(): array
    {
        return [];
    }

    public static function errors(): array
    {
        return [];
    }

    public static function input(): array
    {
        return [];
    }

    public static function maskable(): array
    {
        return [];
    }

    public static function nativeSelect(): array
    {
        return [];
    }

    public static function number(): array
    {
        return [];
    }

    public static function password(): array
    {
        return [];
    }

    public static function phone(): array
    {
        return [];
    }

    public static function radio(): array
    {
        return [];
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

    public static function textarea(): array
    {
        return [];
    }

    public static function timePicker(): array
    {
        return [];
    }

    public static function toggle(): array
    {
        return [];
    }
}
