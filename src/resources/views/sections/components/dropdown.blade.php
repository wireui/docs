<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#dropdown-simple" label="Dropdown Simple" />

            <x-docs::summary.header href="#dropdown-header" label="Dropdown Header" />

            <x-docs::summary.header href="#dropdown-separator" label="Dropdown Separator" />

            <x-docs::summary.header href="#item-icon" label="Item Icon" />

            <x-docs::summary.header href="#trigger-slot" label="Trigger Slot" />

            <x-docs::summary.header href="#item-slot" label="Item Slot" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="dropdown" title="Dropdown" />

    <x-docs::subtitle id="dropdown-simple" title="Dropdown Simple" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
                    <x-dropdown.item label="Settings" />

                    <x-dropdown.item label="My Profile" />

                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-header" title="Dropdown Header" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item label="Preferences" />

                        <x-dropdown.item label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="dropdown-separator" title="Dropdown Separator" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
                    <x-dropdown.header label="Settings">
                        <x-dropdown.item label="Preferences" />

                        <x-dropdown.item label="My Profile" />
                    </x-dropdown.header>

                    <x-dropdown.item separator label="Help Center" />

                    <x-dropdown.item label="Live Chat" />

                    <x-dropdown.item label="Logout" />
                </x-dropdown>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="item-icon" title="Item Icon" />

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
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

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
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

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-wrap gap-4">
            @verbatim
                <x-dropdown align="left">
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
</div>
