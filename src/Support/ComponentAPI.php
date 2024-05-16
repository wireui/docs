<?php

namespace WireUi\Docs\Support;

class ComponentAPI
{
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
}
