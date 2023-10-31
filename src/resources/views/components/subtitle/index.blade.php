@props(['id', 'title', 'href' => null])

@php
    $href ??= isset($id) ? "#{$id}" : $href;
@endphp

<div class="mt-5 mb-3 relative">
    @isset($id)
        <div id="{{ $id }}" class="absolute -top-20"></div>
    @endisset

    <a @if ($href) href="{{ $href }}" @endif
        {{ $attributes->class('text-lg font-extrabold leading-8 tracking-tight text-teal-600') }}>
        {{ $title }}
    </a>
</div>
