<?php

use function Livewire\Volt\{state, computed};

state(['items', 'tab' => 'props']);

$setTab = function (string $tab) {
    $this->tab = $tab;
};

$getItems = computed(function () {
    return data_get($this->items, $this->tab, []);
});

$getVariant = function (string $tab) {
    return $this->tab === $tab ? 'light' : 'flat';
};

?>

<x-docs::tables>
    <x-slot name="title" class="flex flex-row space-x-4">
        @foreach ($items as $key => $item)
            <x-button wire:click="setTab('{{ $key }}')" :label="Str::title($key)" :variant="$this->getVariant($key)" teal />
        @endforeach
    </x-slot>

    <x-slot name="slot" class="flex overflow-auto soft-scrollbar">
        @if ($this->tab === 'props')
            <x-docs::tables.props :props="$this->getItems" />
        @endif

        @if ($this->tab === 'events')
            <x-docs::tables.events :events="$this->getItems" />
        @endif

        @if ($this->tab === 'slots')
            <x-docs::tables.slots :slots="$this->getItems" />
        @endif
    </x-slot>
</x-docs::tables>
