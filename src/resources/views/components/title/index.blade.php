@props(['id', 'title', 'href' => null])

@php
    $href ??= isset($id) ? "#{$id}" : $href;
@endphp

<div class="mt-8 mb-6 relative">
    @isset($id)
        <div id="{{ $id }}" class="absolute -top-20"></div>
    @endisset

    <a @if ($href) href="{{ $href }}" @endif
        {{ $attributes->class('text-2xl font-extrabold leading-8 tracking-tight text-teal-600 sm:text-4xl') }}>
        {{ $title }}
    </a>
</div>
