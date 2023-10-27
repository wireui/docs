<div>
    <x-slot name="summary">
        <x-docs::summary>
            {{-- <x-docs::summary.header href="#alert" label="Alerts">
                <x-docs::summary.item href="#simple-alert" label="Simple Alert" />
                <x-docs::summary.item href="#alert-slot" label="Alert Slot" />
                <x-docs::summary.item href="#action-slot" label="Alert Action Slot and Borderless" />
                <x-docs::summary.item href="#footer-slot" label="Alert Footer" />
            </x-docs::summary.header> --}}

            <x-docs::summary.header href="#simple-alert" label="Simple Alert" />

            <x-docs::summary.header href="#alert-slot" label="Alert Slot" />

            <x-docs::summary.header href="#action-slot" label="Alert Action Slot and Borderless" />

            <x-docs::summary.header href="#footer-slot" label="Alert Footer" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="alerts" title="Alerts" />

    <x-docs::text>
        Alerts are often used to display a positive, negative, info or warning message. It is available for these 4
        colors, but you can customize it any way you want.
    </x-docs::text>

    <x-docs::subtitle id="simple-alert" title="Simple Alert" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex justify-center gap-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" primary flat>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" primary outline>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" primary solid>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>


            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" positive flat>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" positive outline>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" positive solid>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>


            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" negative flat>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" negative outline>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" negative solid>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>


            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" warning flat>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" warning outline>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" warning solid>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>


            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" info flat>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" info outline>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" info solid>
                    This is an error alert — <b>check it out!</b>
                </x-alert>
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="icon-alert" title="Icon Alert" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex justify-center gap-4">
                <x-alert padding="px-2" primary flat>
                    <x-slot name="title">
                        Teste <b>Aqui</b>
                    </x-slot>
                </x-alert>
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" primary flat />
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert icon="x-mark" title="Lorem Ipsum is simply!" padding="px-2" primary flat />
            </div>

            <div class="flex justify-center gap-4 mt-4">
                <x-alert title="Lorem Ipsum is simply!" padding="px-2" primary flat iconless />
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-slot" title="Alert Slot" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex justify-center gap-4">
                <x-alert title="Lorem Ipsum is simply!" shadow="2xl" info>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book
                </x-alert>
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="action-slot" title="Alert Action Slot and Borderless" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex justify-center gap-4">
                <x-alert title="Lorem Ipsum is simply!" positive rounded>
                    <x-slot name="action">
                        <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-positive-600">
                            <x-icon name="ellipsis-vertical" class="w-4 h-4 text-gray-500" />
                        </button>
                    </x-slot>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book
                </x-alert>
            </div>
        @endverbatim
    </x-docs::code.preview>

    <x-docs::subtitle id="alert-footer" title="Alert Footer" />

    <x-docs::code.preview language="blade">
        @verbatim
            <div class="flex justify-center gap-4">
                <x-alert title="Lorem Ipsum is simply!" negative>
                    <x-slot name="action">
                        <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-negative-600">
                            <x-icon name="ellipsis-vertical" class="w-4 h-4 text-gray-500" />
                        </button>
                    </x-slot>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book
                    <x-slot name="footer" class="flex items-center justify-end">
                        <x-button sm label="Close" flat negative />
                    </x-slot>
                </x-alert>
            </div>
        @endverbatim
    </x-docs::code.preview>
</div>