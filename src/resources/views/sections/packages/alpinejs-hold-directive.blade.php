<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#requirements" label="Requirements" />

            <x-docs::summary.header href="#installation" label="Installation" />

            <x-docs::summary.header href="#configure" label="Configure" />

            <x-docs::summary.header href="#how-to-use-it" label="How to use it?" />

            <x-docs::summary.header href="#directive-api" label="Directive API" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="alpinejs-hold-directive" title="AlpineJS Hold Directive" />

    <x-docs::text>
        The hold directive enables you to add a hold action to an element, triggering it when the button is held down.
    </x-docs::text>

    <x-docs::subtitle id="requirements" title="Requirements" />

    <x-docs::list>
        <x-docs::list.item>
            <x-link href="https://alpinejs.dev" label="Alpine.js 3.10 or higher" target="_blank" underline="none"
                teal />
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::subtitle id="installation" title="Installation" />

    <x-docs::text>
        First, you need to install the package via npm or yarn.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            yarn add @wireui/alpinejs-hold-directive

            or

            npm i @wireui/alpinejs-hold-directive --save
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="configure" title="Configure" />

    <x-docs::text>
        Next, you need to register the directive with Alpine.js.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            // resources/js/app.js
            import Alpine from 'alpinejs'

            + import HoldDirective from '@wireui/alpinejs-hold-directive'
            + HoldDirective.register(Alpine)

            // or

            + import { directive } from '@wireui/alpinejs-hold-directive'
            + Alpine.directive('hold', directive)

            window.Alpine = Alpine

            Alpine.start()
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="how-to-use-it" title="How to use it?" />

    <x-docs::text>
        You can use the x-hold directive to call any alpine.js action.
    </x-docs::text>

    <x-docs::code.preview language="js">
        @verbatim
            <div class="flex items-center gap-x-3" x-data="{
                count: 0,
                plus() { this.count++ },
                minus() { this.count-- }
            }">
                <x-button x-hold.click="minus" icon="minus" />

                <span class="bg-teal-600 text-white px-5 py-1.5 rounded-lg" x-text="count"></span>

                <x-button x-hold.click="plus" icon="plus" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="directive-api" title="Directive API" />

    <x-docs::text class="mb-4">
        All modifiers can be used together. Just set the modifier duration after the modifer name,
        <x-docs::mark>x-hold.delay.500ms</x-docs::mark>.
    </x-docs::text>

    <x-docs::tables.alpinejs-hold-directive />
</div>
