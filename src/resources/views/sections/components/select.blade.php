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

            <x-docs::summary.header href="#select-slots" label="Select Slots" />

            <x-docs::summary.header href="#after-options-slot" label="After Options Slot" />

            <x-docs::summary.header href="#select-api" label="Select API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="select" title="Select" />

    <x-docs::text>
        The <b>select</b> component is a versatile and highly customizable feature offered by WireUi. It allows users to
        tailor their web applications to specific needs, enabling them to create dynamic and interactive interfaces.
        With the <b>select</b> component, you can implement various functionalities, such as async search, event
        listeners, slots for custom content placement (before and after options), and the ability to send requests with
        specific parameters like <b>search</b> and <b>selected</b>. This component supports a flexible API design,
        making it easy to retrieve and display options, and you can seamlessly merge query string parameters with
        <b>asyncData</b> parameters. In summary, the <b>select</b> component is a powerful tool for creating tailored
        and user-friendly selection interfaces in web applications.
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

    <x-docs::text.title title="Implementing Async Search with WireUi:" />

    <x-docs::text class="mt-4">
        <b>1.</b> WireUi will automatically send a request with a <x-docs::mark>search</x-docs::mark>
        <b>parameter (a string)</b> as the user types into the input field.
    </x-docs::text>

    <x-docs::text class="mt-4">
        <b>2.</b> When the select component initializes and contains a selected value, it will
        send a request with a <x-docs::mark>selected</x-docs::mark> <b>parameter (an array)</b>
        to fetch details for the selected option.
    </x-docs::text>

    <x-docs::text class="mt-4">
        <b>3.</b> Design your API according to your requirements, but ensure that
        it supports these two key scopes: <b>search</b> and <b>selected</b>.
    </x-docs::text>

    <x-docs::text.title title="Additional Guidelines:" />

    <x-docs::list>
        <x-docs::list.item>
            Your API should return data as an array in the response.
        </x-docs::list.item>

        <x-docs::list.item>
            Make sure to set the <b>option-label</b> and <b>option-value</b> attributes
            to properly define how options are displayed and identified.
        </x-docs::list.item>

        <x-docs::list.item>
            Implement the
            <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php#L17" label="search" target="_blank" teal />
            scope to handle searches based on user input.
        </x-docs::list.item>

        <x-docs::list.item>
            Implement the
            <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php#L23" label="selected" target="_blank" teal />
            scope to retrieve information for the selected option.
        </x-docs::list.item>
    </x-docs::list>

    <x-alert title="Information!" class="my-6" info>
        For a deeper understanding of the API implementation, refer to the following files:
        <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserController.php" label="Controller" target="_blank" info sm />,
        <x-link href="https://github.com/wireui/docs/blob/main/src/Examples/UserControllerTest.php" label="Test" target="_blank" info sm />.
    </x-alert>

    <x-docs::text>
        You have the flexibility to customize the <b>asyncData</b> prop, allowing you
        to modify the HTTP method and incorporate additional data into the request.
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

    <x-docs::text.title title="How to Personalize the Async Data Configuration?" />

    <x-docs::text>
        The query string parameters will be seamlessly merged with
        the parameters from the <b>asyncData</b> component.
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
        A straightforward method for configuring options is to utilize an array of values,
        ensuring that both the <b>name</b> and <b>ID</b> correspond identically.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select
                    label="Select Status"
                    placeholder="Select one status"
                    :options="['Active', 'Pending', 'Stuck', 'Done']"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="multiselect" title="Multi Select" />

    <x-docs::text>
        Another noteworthy feature of the <b>select</b> functionality is
        the ability to choose multiple options simultaneously.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select
                    label="Select Statuses"
                    placeholder="Select many statuses"
                    multiselect
                    :options="['Active', 'Pending', 'Stuck', 'Done']"
                />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="custom-options" title="Custom Options" />

    <x-docs::text>
        Should you prefer, you have the option to provide an array where
        you can specify the <b>name</b> and <b>ID</b> separately.
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
        Another customization option allows you to assign a <b>description</b> field
        to a key element, which will be displayed after the <b>name</b>.
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
        For even more extensive customization, you can pass the options
        within the default slot of the <b>select</b> component.
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
        Additionally, we offer customizable options, including the <b>user-option</b>,
        which can be utilized as a slot or in conjunction with the
        <b>select async search</b> using the template.
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
        Within the <b>select</b> component, we've integrated event listeners
        that respond to actions occurring during its manipulation.
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

    <x-docs::subtitle id="select-slots" title="Select Slots" />

    <x-docs::text>
        The <b>select</b> component provides two available slots for
        customization: <b>beforeOptions</b> and <b>afterOptions</b>.
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

    <x-docs::subtitle id="after-options-slot" title="After Options Slot" />

    <x-docs::text>
        Here's an example of how to utilize the <b>afterOptions</b> slot.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-select
                    label="Search a User"
                    placeholder="Select some user"
                    :async-data="route('api.users.index')"
                    option-label="name"
                    option-value="id"
                    hide-empty-message
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

    <x-docs::subtitle id="select-api" title="Select API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('select')])
</div>
