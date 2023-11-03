<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#password-simple" label="Password Simple" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="password" title="Password" />

    <x-docs::text>
        The password input component is a feature-rich and user-friendly element that integrates a toggle button,
        improving the overall user experience. With this component, users can effortlessly reveal or conceal the
        password value, enhancing the interface's usability and providing greater control over password visibility.
    </x-docs::text>

    <x-docs::subtitle id="password-simple" title="Password Simple" />

    <x-docs::text>
        This component will enhance your user interface by incorporating
        a toggle button for revealing or concealing the password value.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-password label="Secret 🙈" value="I love WireUI ❤️" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
