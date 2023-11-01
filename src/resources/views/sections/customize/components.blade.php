<div>
    <x-docs::title id="components" title="Components" />

    <x-docs::text>
        WireUI empowers you with the flexibility to modify, deactivate, rename, or extend any of its components, giving
        you complete control over the appearance and behavior of your UI elements. This level of customization allows
        you to tailor WireUI to your project's unique needs and design preferences.
        <br><br>
        To initiate these customizations, you must publish the WireUI configuration. This process involves generating a
        configuration file that you can then modify to reflect your desired changes. After you've personalized the
        configuration to your satisfaction, you can enjoy a fully customized WireUI experience.
        <br><br>
        To publish the WireUI configuration, execute the following command in your development environment:
    </x-docs::text>

    <x-docs::code.block language="bash" :line-numbers="false">
        @verbatim
            php artisan vendor:publish --tag="wireui.config"
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        Next, locate and open the
        <x-docs::mark>config/wireui.php</x-docs::mark>
        file, where you can change the alias key to your preferred name.
        <br><br>
        Once you've made this adjustment and saved the file, it's essential to clear the View Cache to ensure that your
        changes take effect. To do this, run the following command:
    </x-docs::text>

    <x-docs::code.block language="bash" :line-numbers="false">
        @verbatim
            php artisan view:clear
        @endverbatim
    </x-docs::code.block>

    <x-alert title="Attention!" class="mb-4" warning>
        It's recommended to execute this command whenever you make changes.
    </x-alert>

    <x-docs::text class="mt-6">
        In this example, we are adjusting the prefix for all WireUI components, as well as making global modifications to default shadow, rounded, and color settings.
        <br><br>
        Additionally, we are providing a straightforward illustration of how to change the alias of a specific component, or even change both the alias and the associated class for further customization.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            'prefix' => 'wireui-',

            'style' => [
                'shadow' => Packs\Shadow::NONE,
                'rounded' => Packs\Rounded::FULL,
                'color' => Packs\Color::SECONDARY,
            ],

            ...

            'components' => Config::defaultComponents([
                'button' => [
                    'alias' => 'new-button',
                ],
                'mini-button' => [
                    'class' => Components\Button\Mini::class,
                    'alias' => 'new-mini-button',
                ],
            ]),
        @endverbatim
    </x-docs::code.block>
</div>
