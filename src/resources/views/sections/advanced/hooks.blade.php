<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#wireui-hooks" label="WireUi Hooks" />

            <x-docs::summary.header href="#available-hooks" label="Available Hooks" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="hooks" title="Hooks" />

    <x-docs::subtitle id="wireui-hooks" title="WireUi Hooks" />

    <x-docs::text>
        WireUI Hooks offer a straightforward method for executing actions at specific moments. You can trigger a
        notification when a Notification component becomes available, or invoke a Livewire action upon WireUI loading.
        Explore the available hooks below:
    </x-docs::text>

    <x-docs::subtitle id="available-hooks" title="Available Hooks" />

    <x-docs::code.block language="js">
        @verbatim
            Wireui.hook('load', () => console.log('wireui is ready to use'))

            Wireui.hook('notifications:load', () => {
                $wireui.notify({
                    title: 'Profile saved!',
                    description: 'Your profile was successfully saved',
                    icon: 'success'
                })
            })

            Wireui.hook('dialog:load', () => {
                $wireui.dialog({
                    title: 'Profile saved!',
                    description: 'Your profile was successfully saved',
                    icon: 'success'
                })
            })

            Or custom dialog hook

            Wireui.hook('dialog:custom:load', () => {})
        @endverbatim
    </x-docs::code.block>
</div>
