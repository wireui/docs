<x-docs::tables>
    <x-slot name="slot" class="flex overflow-auto soft-scrollbar">
        <table class="w-full text-left border-collapse">
            <thead class="border-b-2 dark:border-secondary-700">
                <tr>
                    <th class="w-1/3 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                        Modifier
                    </th>
                    <th class="w-1/3 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                        Description
                    </th>
                    <th class="w-1/3 text-sm font-semibold text-gray-600 dark:text-gray-400 p-2">
                        Default
                    </th>
                </tr>
            </thead>

            <tbody class="align-baseline">
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.500ms
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Set the wait time to repeat the action
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        {{--  --}}
                    </td>
                </tr>
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.repeat
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Set the wait time to repeat the action
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        500ms
                    </td>
                </tr>
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.repeat.500ms
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Set the wait time to repeat the action
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        {{--  --}}
                    </td>
                </tr>
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.delay
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Set the wait time to start holding
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        500ms
                    </td>
                </tr>
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.delay.500ms
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Set the wait time to start holding
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        {{--  --}}
                    </td>
                </tr>
                <tr>
                    <td class="p-2.5 font-mono text-xs text-teal-600 whitespace-nowrap">
                        x-hold.click
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        Fire the hold action with the click event
                    </td>
                    <td class="p-2.5 font-mono text-xs text-gray-600 dark:text-gray-400 whitespace-nowrap">
                        false
                    </td>
                </tr>
            </tbody>
        </table>
    </x-slot>
</x-docs::tables>
