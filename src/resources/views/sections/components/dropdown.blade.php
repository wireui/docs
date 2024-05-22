<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#dropdown-simple" label="Dropdown Simple" />

            <x-docs::summary.header href="#dropdown-header" label="Dropdown Header" />

            <x-docs::summary.header href="#dropdown-separator" label="Dropdown Separator" />

            <x-docs::summary.header href="#dropdown-height" label="Dropdown Height" />

            <x-docs::summary.header href="#dropdown-width" label="Dropdown Width" />

            <x-docs::summary.header href="#dropdown-position" label="Dropdown Position" />

            <x-docs::summary.header href="#item-icon" label="Item Icon" />

            <x-docs::summary.header href="#trigger-slot" label="Trigger Slot" />

            <x-docs::summary.header href="#item-slot" label="Item Slot" />

            <x-docs::summary.header href="#dropdown-api" label="Dropdown API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="dropdown" title="Dropdown" />

    <x-docs::text>
        The dropdown component offers a versatile and customizable user interface element that allows users to select
        from a list of options. It provides the flexibility to change the appearance of the dropdown button, customize
        item headers, and add separators as needed. With options for adjusting heights and widths and the ability to
        apply various starting positions, this component is highly adaptable to different design preferences and
        functional requirements. Furthermore, it supports the inclusion of icons within individual items and the
        modification of the triggering component, making it a powerful tool for creating user-friendly and tailored
        interfaces.
    </x-docs::text>

    <x-docs::subtitle id="dropdown-simple" title="Dropdown Simple" />

    <x-docs::text>
        The dropdown can be initially displayed with a default <b>ellipsis-vertical</b> icon, but
        it offers the flexibility to customize it by replacing it with the icon of your choice.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-dropdown>
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="bars-3">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-header" title="Dropdown Header" />

    <x-docs::text>
        Another advantage of dropdowns is their ability to group items using headers.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown>
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item label="Preferences" />
                        <x-dropdown.item label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.header label="Actions">
                        <x-dropdown.item label="Logout" />
                    </x-dropdown.header>
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-separator" title="Dropdown Separator" />

    <x-docs::text>
        Additionally, there's an option to include separators for both items and headers.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-dropdown>
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item label="Preferences" />
                        <x-dropdown.item label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.item separator label="Help Center" />
                    <x-dropdown.item label="Live Chat" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="bars-3">
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item label="Preferences" />
                        <x-dropdown.item label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.header separator label="Actions">
                        <x-dropdown.item label="Logout" />
                    </x-dropdown.header>
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-height" title="Dropdown Height" />

    <x-docs::text>
        In this updated WireUI version, we offer a variety of height
        options that are fully customizable to suit your preferences.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                {{-- CSS: 'max-h-40' --}}
                <x-dropdown icon="bars-3" height="sm">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-44' --}}
                <x-dropdown icon="bars-3" height="md">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-48' --}}
                <x-dropdown icon="bars-3" height="lg">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-52' --}}
                <x-dropdown icon="bars-3" height="xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-56' --}}
                <x-dropdown icon="bars-3" height="2xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-60' - DEFAULT --}}
                <x-dropdown icon="bars-3" height="3xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-64' --}}
                <x-dropdown icon="bars-3" height="4xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-72' --}}
                <x-dropdown icon="bars-3" height="5xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-80' --}}
                <x-dropdown icon="bars-3" height="6xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- CSS: 'max-h-96' --}}
                <x-dropdown icon="bars-3" height="7xl">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>

                {{-- Or Custom --}}
                <x-dropdown icon="bars-3" height="max-h-[22rem]">
                    <x-dropdown.item label="Test 1" />
                    <x-dropdown.item label="Test 2" />
                    <x-dropdown.item label="Test 3" />
                    <x-dropdown.item label="Test 4" />
                    <x-dropdown.item label="Test 5" />
                    <x-dropdown.item label="Test 6" />
                    <x-dropdown.item label="Test 7" />
                    <x-dropdown.item label="Test 8" />
                    <x-dropdown.item label="Test 9" />
                    <x-dropdown.item label="Test 10" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-width" title="Dropdown Width" />

    <x-docs::text>
        Likewise, the width can be tailored to your needs, with a wide range of customizable values available.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                {{-- CSS: 'w-40' --}}
                <x-dropdown icon="bars-3" width="sm">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-44' --}}
                <x-dropdown icon="bars-3" width="md">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-48' - DEFAULT --}}
                <x-dropdown icon="bars-3" width="lg">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-52' --}}
                <x-dropdown icon="bars-3" width="xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-56' --}}
                <x-dropdown icon="bars-3" width="2xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-60' --}}
                <x-dropdown icon="bars-3" width="3xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-64' --}}
                <x-dropdown icon="bars-3" width="4xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-72' --}}
                <x-dropdown icon="bars-3" width="5xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-80' --}}
                <x-dropdown icon="bars-3" width="6xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- CSS: 'w-96' --}}
                <x-dropdown icon="bars-3" width="7xl">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>

                {{-- Or Custom --}}
                <x-dropdown icon="bars-3" width="w-[17rem]">
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                    <x-dropdown.item label="Test 1 - Test 2 - Test 3 - Test 4 - Test 5 - Test 6 - Test 7" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-position" title="Dropdown Position" />

    <x-docs::text>
        Leveraging the capabilities of the Floating UI, we can apply various initial positions to the dropdown.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-8">
            @verbatim
                <x-dropdown icon="arrow-up" position="top">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-up-right" position="top-start">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-up-left" position="top-end">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-right" position="right">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-down-right" position="right-start">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-up-right" position="right-end">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-down" position="bottom">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-down-right" position="bottom-start">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-down-left" position="bottom-end">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-left" position="left">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-down-left" position="left-start">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>

                <x-dropdown icon="arrow-up-left" position="left-end">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="item-icon" title="Item Icon" />

    <x-docs::text>
        We can also include icons to be displayed within individual items.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown>
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item icon="cog" label="Preferences" />
                        <x-dropdown.item icon="user" label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.item separator label="Help Center" />
                    <x-dropdown.item label="Live Chat" />
                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="trigger-slot" title="Trigger Slot" />

    <x-docs::text>
        You can utilize the trigger slot to modify the component that triggers the dropdown rendering.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-button label="Options" primary />
                    </x-slot>

                    <x-dropdown.item label="Help Center" />
                    <x-dropdown.item separator label="Live Chat" />
                    <x-dropdown.item separator label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="item-slot" title="Item Slot" />

    <x-docs::text>
        For enhanced item customization, you can pass the element as the slot.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown>
                    <x-dropdown.item>
                        <b>Help Center</b>
                    </x-dropdown.item>

                    <x-dropdown.item separator>
                        <b>Live Chat</b>
                    </x-dropdown.item>

                    <x-dropdown.item separator>
                        <b>Logout</b>
                    </x-dropdown.item>
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-api" title="Dropdown API" />

    @livewire("component-api", ['items' => WireUiDocs::getComponentApi('dropdown')])
</div>
