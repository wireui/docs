@props(['props' => []])

<table class="w-full text-left border-collapse">
    <thead class="border-b-2 dark:border-secondary-700">
        <tr>
            <th class="w-1/4 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Prop
            </th>
            <th class="w-1/4 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Type
            </th>
            <th class="w-1/4 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Default
            </th>
            <th class="w-1/4 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                Required
            </th>
        </tr>
    </thead>

    <tbody class="align-baseline">
        @foreach ($props as $key => $prop)
            <tr>
                <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                    {{ $key }}
                </td>
                <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                    {{ data_get($prop, 'type') }}
                </td>
                <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                    {{ data_get($prop, 'default') }}
                </td>
                <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                    {{ data_get($prop, 'required') }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
