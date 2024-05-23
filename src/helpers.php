<?php

use Illuminate\Support\Str;

if (! function_exists('serialize_slot')) {
    function serialize_slot(mixed $slot, mixed $size = null): string
    {
        $content = html_entity_decode($slot);

        $lines = collect(explode(PHP_EOL, $content));

        $size ??= strlen($lines->last()) - strlen(trim($lines->last()));

        return $lines->map(function (string $line) use ($size) {
            return Str::replaceFirst(str_repeat(' ', $size), '', $line);
        })->implode(PHP_EOL);
    }
}
