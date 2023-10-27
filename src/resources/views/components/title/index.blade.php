@props(['id', 'title', 'href' => null])

@php
    $href ??= isset($id) ? "#{$id}" : $href;
@endphp

<div @isset($id) id="{{ $id }}" @endisset class="mt-8 mb-6">
    <a @if ($href) href="{{ $href }}" @endif
        {{ $attributes->class('text-2xl font-extrabold leading-8 tracking-tight text-teal-600 sm:text-4xl level0') }}>
        {{ $title }}
    </a>
</div>
