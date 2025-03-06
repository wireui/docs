<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#meet-wireui" label="Meet WireUI" />

            <x-docs::summary.header href="#requirements" label="Requirements" />

            <x-docs::summary.header href="#installation-steps" label="Installation" />

            <x-docs::summary.header href="#publishing" label="Publishing" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="installation" title="Installation" />

    <x-docs::subtitle id="meet-wireui" title="Meet WireUI" />

    <x-docs::text>
        WireUI is a robust library that offers a comprehensive range of components and resources, designed to
        supercharge your application development when working with Laravel and Livewire. Launching a new project with
        Livewire can often entail a time-consuming process, especially when you need to build all the necessary
        components from the ground up. However, WireUI streamlines this initial phase, allowing you to dive straight
        into development.
        <br><br>
        <b>By incorporating WireUI into your project, you'll enjoy the following benefits:</b>
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item text="All Heroicons" />

        <x-docs::list.item text="Form and UI components" />

        <x-docs::list.item text="Dialogs and Notifications" />

        <x-docs::list.item text="Confirmation notifications" />

        <x-docs::list.item text="Advanced Customization" />
    </x-docs::list>

    <x-docs::subtitle id="requirements" title="Requirements" />

    <x-docs::list>
        <x-docs::list.item>
            <x-link href="https://www.php.net" label="PHP 8.2|8.3|8.4" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://laravel.com" label="Laravel 10.x|11.x|12.x" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://livewire.laravel.com" label="Livewire 3" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://alpinejs.dev" label="Alpine.js 3.x" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://tailwindcss.com" label="Tailwindcss 3.x|4.x" target="_blank" underline="none" teal />
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::subtitle id="installation-steps" title="Installation" />

    <x-docs::text>
        <b>1.</b> Execute the following command to seamlessly integrate WireUI into your project:
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            composer require wireui/wireui
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        <b>2.</b> Insert the WireUI tag above the Alpine.js script tag in your page layout:
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <html>

            <head>
                ...
                <wireui:scripts />
                <script src="//unpkg.com/alpinejs" defer></script>
            </head>

            </html>
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        For an alternative approach, you can utilize the equivalent Blade directive:
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            ...
            @wireUiScripts
            <script src="//unpkg.com/alpinejs" defer></script>
            ...

            Sometimes you need to pass extra html attributes to script tag, like the nonce attribute
            @wireUiScripts(['nonce': 'csp-token'])
            @wireUiScripts(['nonce': 'csp-token', 'foo' => true])
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        <b>3.</b> Incorporate the following configurations into your Tailwind CSS setup, located in the
        <x-docs::mark>tailwind.config.js</x-docs::mark> file:
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            module.exports = {
                ...
                presets: [
                    ...
                    require("./vendor/wireui/wireui/tailwind.config.js")
                ],
                content: [
                    ...
                    "./vendor/wireui/wireui/src/*.php",
                    "./vendor/wireui/wireui/ts/**/*.ts",
                    "./vendor/wireui/wireui/src/WireUi/**/*.php",
                    "./vendor/wireui/wireui/src/Components/**/*.php",
                ],
                ...
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="publishing" title="Publishing" />

    <x-docs::text>
        WireUI requires no extra configuration; however, you have the flexibility to publish the files and tailor them
        to your preferences.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.lang"
            php artisan vendor:publish --tag="wireui.config"
        @endverbatim
    </x-docs::code.block>
</div>
