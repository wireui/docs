<?php

namespace WireUi\Docs;

use Illuminate\Routing\Router;
use Illuminate\Support;
use WireUi\Docs\Middleware\CheckDocs;
use WireUi\Docs\View\Components\Code;

class ServiceProvider extends Support\ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViews();

        $this->registerCommands();

        $this->registerMiddleware();
    }

    private function loadViews(): void
    {
        $this->loadViewComponentsAs('docs', [Code::class]);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'docs');
    }

    private function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\ClearCacheCommand::class,
            ]);
        }
    }

    private function registerMiddleware(): void
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('check.docs', CheckDocs::class);
    }
}
