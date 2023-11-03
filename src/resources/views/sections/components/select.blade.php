<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#async-search" label="Async Search" />

            <x-docs::summary.header href="#simple-options" label="Simple Options" />

            <x-docs::summary.header href="#multiselect" label="Multi Select" />

            <x-docs::summary.header href="#custom-options" label="Custom Options" />

            <x-docs::summary.header href="#option-with-description" label="Option With Description" />

            <x-docs::summary.header href="#slot-options" label="Slot Options" />

            <x-docs::summary.header href="#customizable-options" label="Customizable Options" />

            <x-docs::summary.header href="#select-events" label="Select Events" />

            <x-docs::summary.header href="#after-options-slot" label="After Options Slot" />

            <x-docs::summary.header href="#select-slots" label="Select Slots" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="select" title="Select" />

    <x-docs::text>
        The Select component has support to render default html select with slot or options prop.
        You can customize the option component for one or all options. See Examples.
    </x-docs::text>

    <x-docs::subtitle id="async-search" title="Async Search" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select
                    label="Search a User"
                    placeholder="Select some user"
                    :async-data="route('api.users.index')"
                    option-label="name"
                    option-value="id"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::text.title title="How to Implement the async-search?" />

    <x-docs::text>
        WireUi will make a request with the
        <x-docs::mark>search</x-docs::mark> <b>parameter(string)</b>
        when the user types in the input.
        <br>
        When the component is initialized and has any selected value,
        the select will send a request with the
        <x-docs::mark>selected</x-docs::mark> <b>parameter(array)</b>
        to find the selected option.
        <br>
        You are free to create your API as you want, just apply these two scopes: search and selected.
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item>
            Create an API that returns an array in the response.
        </x-docs::list.item>

        <x-docs::list.item>
            Set the <x-docs::mark>option-label</x-docs::mark> and <x-docs::mark>option-value</x-docs::mark> attributes.
        </x-docs::list.item>

        <x-docs::list.item>
            Implement the
            <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php#L17" label="search" target="_blank" teal />
            scope.
        </x-docs::list.item>

        <x-docs::list.item>
            Implement the
            <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php#L23" label="selected" target="_blank" teal />
            scope.
        </x-docs::list.item>
    </x-docs::list>

    <x-alert title="Information!" class="my-6" info>
        See these files to read more about the <b>API</b> implementation.
        <br><br>
        <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php" label="Controller" target="_blank" info sm />,
        <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserControllerTest.php" label="Test" target="_blank" info sm />.
    </x-alert>

    <x-docs::text>
        You can customize the asyncData prop to change the http method and add more data to the request.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            export type AsyncDataConfig = {
                api: string | null
                method: string
                params: any,
                credentials?: RequestCredentials,
                alwaysFetch: boolean
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="How to Customize the async-data?" />

    <x-docs::text>
        The queryString params will be merged with the asyncData params.
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-select ... :async-data="route('api.users.index', ['foo' => 'bar'])" />

            OR

            <x-select ... :async-data="[
                'api' => route('api.users.index'),
                'method' => 'POST', // default is GET
                'params' => ['ble' => 'baz'], // default is []
                'credentials' => 'include', // default is undefined
            ]" />
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="simple-options" title="Simple Options" />

    <x-docs::text>
        One way to pass options in a simple way is by assigning an array of values, where the name and ID will be the same.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Select Status" placeholder="Select one status" :options="['Active', 'Pending', 'Stuck', 'Done']" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="multiselect" title="Multi Select" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Select Statuses" placeholder="Select many statuses" multiselect :options="['Active', 'Pending', 'Stuck', 'Done']" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-options" title="Custom Options" />

    <x-docs::text>
        If you wish, you can pass an array specifying the name and ID independently.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Select Status" placeholder="Select one status"
                    :options="[
                        ['name' => 'Active', 'id' => 1],
                        ['name' => 'Pending', 'id' => 2],
                        ['name' => 'Stuck', 'id' => 3],
                        ['name' => 'Done', 'id' => 4],
                    ]" option-label="name" option-value="id"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="option-with-description" title="Option With Description" />

    <x-docs::text>
        Another customization is to be able to assign the description field to a king in which it will be shown after the name.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Order Status" placeholder="Select one status"
                    :options="[
                        ['name' => 'Active', 'id' => 1, 'description' => 'The status is active'],
                        ['name' => 'Pending', 'id' => 2, 'description' => 'The status is pending'],
                        ['name' => 'Stuck', 'id' => 3, 'description' => 'The status is stuck'],
                        ['name' => 'Done', 'id' => 4, 'description' => 'The status is done'],
                    ]" option-label="name" option-value="id"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="slot-options" title="Slot Options" />

    <x-docs::text>
        If you need even greater customization, you can pass the options in the default slot in Native select
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Select Status" placeholder="Select one status">
                    <x-select.option label="Pending" value="1" />
                    <x-select.option label="In Progress" value="2" />
                    <x-select.option label="Stuck" value="3" />
                    <x-select.option label="Done" value="4" />
                </x-select>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="customizable-options" title="Customizable Options" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-lg mx-auto">
            @verbatim
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <x-select label="Select Relator" placeholder="Select relator">
                        <x-select.user-option :src="Vite::docs('andre.jpeg')" label="André Luiz" value="1" />
                        <x-select.user-option :src="Vite::docs('fernando.jpeg')" label="Fernando Gunther" value="2" />
                        <x-select.user-option :src="Vite::docs('keithyellen.jpg')" label="Keithyellen Huhn" value="3" />
                        <x-select.user-option :src="Vite::docs('joao-pedro.jpg')" label="João Pedro" value="4" />
                        <x-select.user-option :src="Vite::docs('pedro.jpg')" label="Pedro Henrique" value="5" />
                    </x-select>

                    <x-select label="Search a User" placeholder="Select some user"
                        :async-data="route('api.users.index')" :template="[
                            'name' => 'user-option',
                            'config' => ['src' => 'profile_image'],
                        ]" option-label="name" option-value="id" option-description="email"
                    />
                </div>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="select-events" title="Select Events" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-select
                ...
                x-on:open="alert('openned select')"
                x-on:close="alert('closed select')"
                x-on:selected="alert('selected/unselected option')"
                x-on:clear="alert('cleared select')"
            >
                ...
            </x-select>
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="after-options-slot" title="After Options Slot" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select label="Search a User" placeholder="Select some user"
                    :async-data="route('api.users.index')" option-label="name"
                    option-value="id" hide-empty-message
                >
                    <x-slot name="afterOptions" class="flex justify-center p-2" x-show="displayOptions.length === 0">
                        <x-button
                            x-on:click="close; $wireui.notify({ title: 'Not implemented yet', icon: 'info' })"
                            primary flat full>
                            <span x-html="`Create user <b>${search}</b>`"></span>
                        </x-button>
                    </x-slot>
                </x-select>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="select-slots" title="Select Slots" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-slot name="beforeOptions">
                // html code
            </x-slot>

            <x-slot name="afterOptions">
                // html code
            </x-slot>
        @endverbatim
    </x-docs::code.block>
</div>
