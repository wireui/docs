<div>
    <x-slot name="summary">
        <x-docs::summary>
            <x-docs::summary.header href="#requirements" label="Requirements" />

            <x-docs::summary.header href="#installation" label="Installation" />

            <x-docs::summary.header href="#publishing" label="Publishing" />

            <x-docs::summary.header href="#using-tailwind" label="Using Tailwind?" />

            <x-docs::summary.header href="#how-to-use-it" label="How to use it?" />
        </x-docs::summary>
    </x-slot>

    <x-docs::title id="breadcrumbs" title="Breadcrumbs" />

    <x-docs::text>
        WireUI Breadcrumbs package streamlines the process of implementing breadcrumbs in your web application. Our
        package offers an elegant and customizable breadcrumbs API that can be easily defined in your routes or full
        page livewire components.
        <br><br>
        Simplify your users' navigation experience with our intuitive interface and straightforward code.
    </x-docs::text>

    <x-docs::subtitle id="requirements" title="Requirements" />

    <x-docs::list>
        <x-docs::list.item>
            <x-link href="https://www.php.net" label="PHP 8.2 or higher" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://laravel.com" label="Laravel 10.x or higher" target="_blank" underline="none" teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://livewire.laravel.com" label="Livewire 3" target="_blank" underline="none" teal />
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::text.title title="Optional - TallStack" />

    <x-docs::text>
        If do you want to use the default breadcrumbs component, you need to install these packages.
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item>
            <x-link href="https://alpinejs.dev" label="Alpine.js 3.10 or higher" target="_blank" underline="none"
                teal />
        </x-docs::list.item>

        <x-docs::list.item>
            <x-link href="https://tailwindcss.com" label="Tailwindcss 3.1 or higher" target="_blank" underline="none"
                teal />
        </x-docs::list.item>
    </x-docs::list>

    <x-docs::subtitle id="installation" title="Installation" />

    <x-docs::text>
        First, you'll need to install the package via composer:
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            composer require wireui/breadcrumbs
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="publishing" title="Publishing" />

    <x-docs::text>
        Run the following command to create the breadcrumbs route file.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.breadcrumbs.route"
        @endverbatim
    </x-docs::code.block>

    <x-docs::text>
        You can also publish the configuration file and views.
    </x-docs::text>

    <x-docs::code.block language="bash">
        @verbatim
            php artisan vendor:publish --tag="wireui.breadcrumbs.config"
            php artisan vendor:publish --tag="wireui.breadcrumbs.views"
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="using-tailwind" title="Using Tailwind?" />

    <x-docs::text>
        Add the breadcrumbs path to the content of your Tailwind config file.
    </x-docs::text>

    <x-docs::code.block language="ts">
        @verbatim
            /** @type {import('tailwindcss').Config} */
            module.exports = {
                content: [
                    './vendor/wireui/breadcrumbs/src/Components/**/*.php',
                    './vendor/wireui/breadcrumbs/src/views/**/*.blade.php',
                ],
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::subtitle id="how-to-use-it" title="How to use it?" />

    <x-docs::text.title title="Defining Route Breadcrumbs" />

    <x-docs::text>
        You can create multiple breadcrumbs files to register your breadcrumbs.
    </x-docs::text>

    <x-docs::list>
        <x-docs::list.item text="routes/breadcrumbs.php (default)" />

        <x-docs::list.item text="routes/breadcrumbs/users.php" />

        <x-docs::list.item text="routes/breadcrumbs/customers.php" />
    </x-docs::list>

    <x-docs::text>
        Then, register these files in the breadcrumbs config file. See the
        <x-link href="#publishing" teal>publish section</x-link>.
    </x-docs::text>

    <x-docs::code.block tab="12" language="php">
        @verbatim
            Breadcrumbs::for('users.view')
                ->push('Users', route('users'))
                ->push('View');
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="Livewire Components" />

    <x-docs::text>
        You can define your breadcrumbs in the full page
        <x-link href="https://livewire.laravel.com/docs/redirecting#redirecting-to-full-page-components" target="_blank" teal>Livewire Components</x-link>.
        The breadcrumbs in the livewire components is reactive.
    </x-docs::text>

    <x-docs::code.block language="php">
        @verbatim
            namespace App\Http\Livewire;

            use Livewire\Component;
            use WireUi\Breadcrumbs\Trail;

            class Index extends Component
            {
                /*
                * Don't forget
                *  - This method must return a `Trail` instance
                *  - It must be a public method
                *  - You can use dependency injection
                */
                public function breadcrumbs(Trail $trail): Trail
                {
                    return $trail
                        ->push('Users', route('users'))
                        ->push('Create 1');
                }
            }
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="Dependency Injection" />

    <x-docs::text>
        When registering a route breadcrumb, you can use dependency injection. It is useful when you need to get the
        current model in the route breadcrumb, or any other dependency.
    </x-docs::text>

    <x-docs::code.block tab="12" language="php">
        @verbatim
            // route: /users/{user}
            Breadcrumbs::for('users.view')
                ->push('Users', route('users'))
                ->push('View')
                ->callback(function (Trail $trail, User $user, Request $request): Trail {
                    return $trail->push($user->name);
                });

            // route: /posts/{id}
            Breadcrumbs::for('posts.view')
                ->push('Users', route('users'))
                ->push('View')
                ->callback(function (Trail $trail, int $id): Trail {
                    return $trail->push($id);
                });
        @endverbatim
    </x-docs::code.block>

    <x-docs::text.title title="Rendering (TallStack Only)" />

    <x-docs::text>
        Just add the breadcrumbs component in your layout.
    </x-docs::text>

    <x-docs::code.block language="blade">
        @verbatim
            <x-breadcrumbs />
        @endverbatim
    </x-docs::code.block>
</div>
