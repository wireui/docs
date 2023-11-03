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
        The Native select component offers a versatile and user-friendly way to customize and configure options. It
        provides multiple methods for passing options, from assigning an array of values where the <b>name</b> and
        <b>ID</b> match to specifying them independently. Additionally, this component allows for extensive
        customization by passing options through the default slot, granting users the flexibility to tailor the select
        component to their specific needs and preferences.
    </x-docs::text>

    <x-docs::subtitle id="simple-options" title="Simple Options" />

    <x-docs::text>
        A straightforward method for configuring options is to use an array
        of values in which the <b>name</b> and <b>ID</b> are identical.
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
        Should you prefer, you have the option to pass an array where you can
        specify the <b>name</b> and <b>ID</b> separately.
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
        Another customization option is to assign the <b>description</b> field to a king,
        which will be displayed after the <b>name</b>.
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
        For even more extensive customization, you can pass the options in the
        default slot within the native select component.
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
