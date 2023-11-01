<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#textarea-simple" label="Textarea Simples" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="textarea" title="Textarea" />

    <x-docs::text>
        A textarea component is a user interface element commonly used in web development to create a multi-line text
        input field. It allows users to enter and edit larger amounts of text, making it suitable for tasks such as
        composing messages, comments, or longer pieces of content. Textareas are versatile and can be customized with
        various attributes and styling to meet specific design and functionality requirements. They are an essential
        part of web forms and provide a user-friendly way for individuals to input textual information.
    </x-docs::text>

    <x-alert title="Information!" class="my-4" info>
        The textarea component has all
        <x-link href="/components/inputs" info>Inputs</x-link>
        options and slots.
    </x-alert>

    <x-docs::subtitle id="textarea-simple" title="Textarea Simples" />

    <x-docs::text>
        The textarea is an uncomplicated component that is easy to use and employs attributes similar to those used with
        input elements.
    </x-docs::text>

    <x-docs::code.preview language="blade">
        <x-slot name="slot" class="max-w-sm mx-auto">
            @verbatim
                <x-textarea label="Notes" placeholder="write your notes" />
            @endverbatim
        </x-slot>
    </x-docs::code.preview>
</div>
