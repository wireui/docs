<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#troubleshooting" label="Troubleshooting" />

            <x-docs::summary.header href="#version-update" label="Version Update" />

            <x-docs::summary.header href="#using-https" label="WireUI not using https" />

            <x-docs::summary.header href="#tailwind-forms" label="Tailwind Forms" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="troubleshooting" title="Troubleshooting" />

    <x-docs::text>
        This page addresses common issues that developers may encounter with WireUI and provides solutions. If you don't
        find a resolution for the specific problem you're facing, please consider checking the
        <x-link href="https://github.com/wireui/wireui/issues" target="_blank" teal>Issues</x-link> page on the WireUI
        GitHub repository. If your issue hasn't been addressed there, don't hesitate to create a new Issue, and be sure
        to include as many details as possible.
    </x-docs::text>

    <x-docs::title id="version-update" title="Version Update" />

    <x-docs::text>
        If you've recently updated WireUI and are encountering issues, please ensure you consult the version-specific
        documentation before proceeding with this section.
        <br><br>
        Stay up to date with the latest developments in WireUI by following the author,
        <x-link href="https://twitter.com/ph7jack" target="_blank" teal>@ph7jack</x-link>, on Twitter.
    </x-docs::text>

    <x-docs::title id="using-https" title="WireUI not using https" />

    <x-docs::text>
        If your assets (scripts and CSS files) are loaded via
        <x-docs::mark>http://</x-docs::mark> instead of
        <x-docs::mark>https://</x-docs::mark>, you can consider the following steps
    </x-docs::text>

    <br>

    <x-docs::text>
        <b>1.</b> Ensure that the `APP_URL` in your
        <x-docs::mark>.env</x-docs::mark> file is configured with an HTTPS prefix.
    </x-docs::text>

    <x-docs::code.block language="env">
        @verbatim
            APP_URL=https://example.com
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        <b>2.</b> To clear Laravel's cache, execute the following command:
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan optimize:clear
        @endverbatim
    </x-docs::code.block>

    <x-docs::title id="tailwind-forms" title="Tailwind Forms" />

    <x-docs::text>
        If you've come across the
        <x-docs::mark>TypeError: require(...) is not a function</x-docs::mark> error,
        it's essential to update your Tailwind-Forms to version
        <x-docs::mark>"^0.3.0"</x-docs::mark>.
        This issue commonly arises during Laravel Breeze installation.
    </x-docs::text>

    <x-docs::text.title title="Error:" />

    <x-docs::code.block language="bash" :line-numbers="false" no-copy>
        @verbatim
            ERROR in ./resources/css/app.css
            Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):
            ModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):
            TypeError: require(...) is not a function
            ...
            1 ERROR in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)
            webpack compiled with 2 errors
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="Solution:" />

    <x-docs::text>
        Adjust your Tailwind-Forms version, and then execute the <x-docs::mark>npm update</x-docs::mark> command.
    </x-docs::text>

    <x-docs::code.block language="js">
        @verbatim
            "devDependencies": {
                "@tailwindcss/forms": "^0.3.0",
                //..
            }
        @endverbatim
    </x-docs::code.block>
</div>
