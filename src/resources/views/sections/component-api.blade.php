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

<x-card class="mt-3 mb-6">
    <x-slot name="title" class="flex flex-row space-x-4">
        @foreach ($items as $key => $item)
            <x-button wire:click="setTab('{{ $key }}')" :label="Str::title($key)" :variant="$this->getVariant($key)" teal />
        @endforeach
    </x-slot>

    @dump($this->getItems)
</x-card>
