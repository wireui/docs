<?php

namespace WireUI\Docs;

use Illuminate\Routing\Router;
use Illuminate\Support;
use WireUI\Docs\Middleware\CheckPage;
use WireUI\Docs\View\Components\Code;

class ServiceProvider extends Support\ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViews();

        $this->registerMiddleware();
    }

    /**
     * Load the package's views.
     */
    private function loadViews(): void
    {
        $this->loadViewComponentsAs('docs', [Code::class]);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'docs');
    }

    /**
     * Register the package's middleware.
     */
    private function registerMiddleware(): void
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('check.page', CheckPage::class);
    }
}
