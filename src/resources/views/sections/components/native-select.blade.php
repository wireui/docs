<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#simple-options" label="Simple Options" />

            <x-docs::summary.header href="#custom-options" label="Custom Options" />

            <x-docs::summary.header href="#option-with-description" label="Option With Description" />

            <x-docs::summary.header href="#slot-options" label="Slot Options" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="native-select" title="Native Select" />

    <x-docs::text>
        The Native Select component has support to render default html select with slot or options prop. See Examples.
    </x-docs::text>

    <x-docs::subtitle id="simple-options" title="Simple Options" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-native-select label="Select Status" placeholder="Select one status" :options="['Active', 'Pending', 'Stuck', 'Done']" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-options" title="Custom Options" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-native-select label="Select Status" :options="[
                    ['name' => 'Active', 'id' => 1],
                    ['name' => 'Pending', 'id' => 2],
                    ['name' => 'Stuck', 'id' => 3],
                    ['name' => 'Done', 'id' => 4],
                ]" option-label="name" option-value="id" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="option-with-description" title="Option With Description" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-native-select label="Order Status" placeholder="Select one status" :options="[
                    ['name' => 'Active', 'id' => 1, 'description' => 'The status is active'],
                    ['name' => 'Pending', 'id' => 2, 'description' => 'The status is pending'],
                    ['name' => 'Stuck', 'id' => 3, 'description' => 'The status is stuck'],
                    ['name' => 'Done', 'id' => 4, 'description' => 'The status is done'],
                ]" option-label="name" option-value="id" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="slot-options" title="Slot Options" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-native-select label="Select Status">
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Stuck</option>
                    <option>Done</option>
                </x-native-select>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
