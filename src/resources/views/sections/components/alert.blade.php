<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#simple-alert" label="Simple Alert" />

            <x-docs::summary.header href="#alert-slots" label="Alert Slots" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title title="Alert" />

    <x-docs::text>
        Alerts are often used to display a positive, negative, info or warning message. It is available for these 4
        colors, but you can customize it any way you want.
    </x-docs::text>

    <x-docs::subtitle id="simple-alert" title="Simple Alert" />

    <x-docs::text>
        The alert component natively has 6 colors, which are:
        <x-docs::mark>primary</x-docs::mark>,
        <x-docs::mark>secondary</x-docs::mark>,
        <x-docs::mark>positive</x-docs::mark>,
        <x-docs::mark>negative</x-docs::mark>,
        <x-docs::mark>warning</x-docs::mark> and
        <x-docs::mark>info</x-docs::mark>.
        A simple way to use the alert is to just pass the title and the color you want, as in the example below:
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-alert title="Any Message!" />

                <x-alert title="Any Message!" secondary />

                <x-alert title="Success Message!" positive />

                <x-alert title="Error Message!" negative />

                <x-alert title="Alert Message!" warning />

                <x-alert title="Information Message!" info />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-slots" title="Alert Slots" />

    <x-docs::text>
        Text
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="flex flex-col space-y-4">
            @verbatim
                <x-alert warning>
                    <x-slot name="title" class="italic !font-bold">
                        This is an alert alert — check it out!
                    </x-slot>
                </x-alert>

                <x-alert title="Success Message!" positive>
                    This is an success alert — <b>check it out!</b>
                </x-alert>

                <x-alert title="Error Message!" negative>
                    <x-slot name="slot" class="italic">
                        This is an error alert — <b>check it out!</b>
                    </x-slot>
                </x-alert>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
