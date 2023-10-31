<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#hide-scrollbar" label="Hide Scrollbar" />

            <x-docs::summary.header href="#soft-scrollbar" label="Soft Scrollbar" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="css-utlitites" title="CSS Utilities" />

    <x-docs::text>
        WireUI components make effective use of a range of CSS utilities that are designed to cater to the needs of
        developers at all levels of expertise. These utilities offer a versatile toolkit for handling styling, layout,
        and responsiveness, making it easier for developers to create visually appealing and responsive user interfaces.
    </x-docs::text>

    <x-docs::subtitle id="hide-scrollbar" title="Hide Scrollbar" />

    <x-alert title="Information!" class="mb-4" info>
        To conceal the scrollbar, simply apply the <b>.hide-scrollbar</b> CSS class.
        <br><br>
        To scroll through the content, press and hold the <b>shift</b> key while using the mouse wheel.
    </x-alert>

    <x-docs::code.preview language="html">
        <x-slot name="slot" class="grid grid-cols-1 gap-5 sm:grid-cols-2">
            @verbatim
                <div class="w-full p-2 overflow-x-auto h-52">
                    <div class="relative flex items-center border rounded-lg shadow-lg h-44 bg-negative-500"
                        style="width: 900px">
                        <div class="absolute w-full h-8 border-white border-dashed border-y-8"></div>
                    </div>
                </div>

                <div class="w-full p-2 overflow-x-auto h-52 hide-scrollbar">
                    <div class="relative flex items-center border rounded-lg shadow-lg h-44 bg-positive-500"
                        style="width: 900px">
                        <div class="absolute w-full h-8 border-white border-dotted border-y-8"></div>
                    </div>
                </div>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>

    <x-docs::subtitle id="soft-scrollbar" title="Soft Scrollbar" />

    <x-alert title="Information!" class="mb-4" info>
        You can customize the scrollbar appearance by applying the <b>.soft-scrollbar</b> CSS class.
    </x-alert>

    <x-docs::code.preview language="html">
        <x-slot name="slot" class="grid grid-cols-1 gap-5 sm:grid-cols-2">
            @verbatim
                <div class="w-full p-2 overflow-x-auto h-52">
                    <div class="relative flex items-center border rounded-lg shadow-lg h-44 bg-negative-500"
                        style="width: 900px">
                        <div class="absolute w-full h-8 border-white border-dashed border-y-8"></div>
                    </div>
                </div>

                <div class="w-full p-2 overflow-x-auto h-52 soft-scrollbar">
                    <div class="relative flex items-center border rounded-lg shadow-lg h-44 bg-positive-500"
                        style="width: 900px">
                        <div class="absolute w-full h-8 border-white border-dotted border-y-8"></div>
                    </div>
                </div>
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
