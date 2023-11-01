@props(['href', 'label'])

<li class="list-none">
    <a href="{{ $href }}" {{ $attributes }}>
        <span class="mr-1 text-teal-600">#</span>
        {{ $label }}
    </a>
</li>
