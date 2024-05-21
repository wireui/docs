@props(['slots' => []])

<table class="w-full text-left border-collapse">
    <thead class="border-b-2 dark:border-secondary-700">
        <tr>
            <th class="w-1/2 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Slot
            </th>
            <th class="w-1/2 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Description
            </th>
        </tr>
    </thead>

    <tbody class="align-baseline">
        @foreach ($slots as $key => $slot)
            <tr>
                <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                    {{ $key }}
                </td>
                <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                    {{ data_get($slot, 'description') }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
