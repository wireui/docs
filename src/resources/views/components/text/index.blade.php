@props(['justify' => true])

<p {{ $attributes->class([
    'text-base leading-7 text-secondary-500 dark:text-secondary-400',
    'text-justify' => $justify,
]) }}>
    {{ $slot }}
</p>
