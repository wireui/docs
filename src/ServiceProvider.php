<?php

namespace WireUi\Docs;

use Illuminate\Routing\Router;
use Illuminate\Support;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use WireUi\Docs\Middleware\CheckDocs;
use WireUi\Docs\View\Components\Code;

class ServiceProvider extends Support\ServiceProvider
{
    public function boot(): void
    {
        $this->bootViews();

        $this->bootConfig();

        $this->bootMacros();

        $this->bootCommands();

        $this->bootMiddlewares();
    }

    private function bootConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'docs');
    }

    private function bootViews(): void
    {
        $this->loadViewComponentsAs('docs', [Code::class]);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'docs');
    }

    private function bootMacros(): void
    {
        Collection::macro('slugify', function () {
            /** @var Collection $this */
            return $this->map(fn ($value) => Str::slug($value));
        });
    }

    private function bootCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\ClearCacheCommand::class,
            ]);
        }
    }

    private function bootMiddlewares(): void
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('check.docs', CheckDocs::class);
    }
}
