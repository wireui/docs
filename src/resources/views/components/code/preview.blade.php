@props(['language', 'clean' => false, 'noCopy' => false, 'lineNumbers' => true, 'color' => false])

<div x-cloak x-data="codePreview()"
    {{ $attributes->class([
        'relative shadow-md dark:shadow-none rounded-lg' => !$clean,
        'mt-3 mb-6',
    ]) }}>
    <div x-show="!code" @class([
        'bg-gray-100 dark:bg-secondary-700' => $color && !$clean,
        'bg-white dark:bg-secondary-950' => !$color && !$clean,
        'p-6 rounded-lg' => !$clean,
    ])>
        @if (WireUi::checkSlot($slot))
            <div {{ $slot->attributes }}>
                {!! Blade::render(serialize_slot($slot), $this->all()) !!}
            </div>
        @else
            {!! Blade::render(serialize_slot($slot), $this->all()) !!}
        @endif
    </div>

    <div x-ref="code" x-show="code" wire:ignore>
        <x-docs-code :language="$language" :contents="serialize_slot($slot)" :line-numbers="$lineNumbers" />
    </div>

    <div class="absolute top-0 right-0 p-1">
        <div class="flex items-center space-x-2">
            @if (!$noCopy)
                <x-mini-button x-show="code" x-ref="copy" flat focus="none" teal xs>
                    <x-icon x-show="!copy" name="document" class="w-4 h-4 stroke-current" outline />

                    <x-icon x-show="copy" name="document-check" class="w-4 h-4 stroke-current" outline />
                </x-mini-button>
            @endif

            <x-mini-button x-on:click="toggleCode" flat focus="none" teal xs>
                <x-icon x-show="code" name="eye" class="w-4 h-4 stroke-current" outline />

                <x-icon x-show="!code" name="code-bracket" class="w-4 h-4 stroke-current" outline />
            </x-mini-button>
        </div>
    </div>
</div>
