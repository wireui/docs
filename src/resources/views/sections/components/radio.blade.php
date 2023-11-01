<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#radio" label="Radio">
                <x-docs::summary.item href="#simple-radio" label="Simple Radio" />
                <x-docs::summary.item href="#radio-with-label" label="Radio With Label" />
                <x-docs::summary.item href="#radio-sizes" label="Radio Sizes" />
            </x-docs::summary.header>

            <x-docs::summary.header href="#radio-options" label="Radio Options" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="radio" title="Radio" />

    <x-docs::text>
        Radio buttons are used in forms to present the user with a list of options, allowing only a single selection.
        Radio buttons can also be used to switch options, like turning something on/off.
    </x-docs::text>

    <x-docs::subtitle id="simple-radio" title="Simple Radio" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap gap-4">
                <x-radio id="input-radio" name="radio" value="1" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="radio-with-label" title="Radio With Label" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-wrap gap-4">
                <x-radio id="left-label" left-label="Label in Left" name="radio" value="2" />
                <x-radio id="right-label" label="Label in Right" name="radio" value="3" />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="radio-sizes" title="Radio Sizes" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex flex-col gap-4">
                <div class="flex flex-wrap gap-4">
                    <x-radio id="xs" name="radio" value="4" primary xs />
                    <x-radio id="sm" name="radio" value="5" secondary sm />
                    <x-radio id="md" name="radio" value="6" positive md />
                    <x-radio id="md" name="radio" value="7" negative md />
                    <x-radio id="lg" name="radio" value="8" warning lg />
                    <x-radio id="xl" name="radio" value="9" info xl />
                </div>

                <div class="flex flex-wrap gap-4">
                    <x-radio id="none" name="radio" value="10" xl rounded="none" />
                    <x-radio id="sm" name="radio" value="11" xl rounded="sm" />
                    <x-radio id="base" name="radio" value="12" xl rounded="base" />
                    <x-radio id="md" name="radio" value="13" xl rounded="md" />
                    <x-radio id="lg" name="radio" value="14" xl rounded="lg" />
                    <x-radio id="xl" name="radio" value="15" xl rounded="xl" />
                    <x-radio id="2xl" name="radio" value="16" xl rounded="2xl" />
                    <x-radio id="3xl" name="radio" value="17" xl rounded="3xl" />
                    <x-radio id="full" name="radio" value="18" xl rounded="full" />
                </div>
            </div>
        @endverbatim
    </x-docs::code.preview>
</div>
