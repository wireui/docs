<x-card padding="small" class="mt-3 mb-6" :color="[
    'root' => 'bg-white dark:bg-secondary-950',
    'text' => 'text-secondary-700 dark:text-secondary-400',
    'border' => 'border-secondary-200 dark:border-secondary-600',
]">
    @foreach ($__laravel_slots as $key => $value)
        @slot($key, $value)
    @endforeach
</x-card>
