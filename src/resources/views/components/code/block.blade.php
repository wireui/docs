@props(['language', 'clean' => false, 'noCopy' => false, 'lineNumbers' => true, 'render' => false, 'tab' => null])

<div x-cloak x-data="codePreview()"
    {{ $attributes->class([
        'relative shadow-lg dark:shadow-none rounded-lg' => !$clean,
        'mt-3 mb-6',
    ]) }}>
    @if ($render)
        <div {{ WireUi::extractAttributes($slot) }}>
            {!! Blade::render(serialize_slot($slot), $this->all()) !!}
        </div>
    @endif

    <div x-ref="code" wire:ignore>
        <x-docs-code :language="$language" :contents="serialize_slot($slot, $tab)" :line-numbers="$lineNumbers" />
    </div>

    @if (!$noCopy)
        <div class="absolute top-0 right-0 p-1">
            <x-mini-button x-ref="copy" flat focus="none" teal xs>
                <x-icon x-show="!copy" name="document" class="w-4 h-4 stroke-current" outline />

                <x-icon x-show="copy" name="document-check" class="w-4 h-4 stroke-current" outline />
            </x-mini-button>
        </div>
    @endif
</div>
