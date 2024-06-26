<?php

namespace WireUi\Docs\Tests;

use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use ReflectionClass;
use WireUi\Docs\ServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    /**
     * Define routes setup.
     */
    protected function defineRoutes($router)
    {
        $router->get('/{section}/{page}', fn () => 'Page exists')->middleware('check.docs');
    }

    /**
     * Call protected/private method of a class.
     */
    public function invokeMethod(mixed $object, string $method, array $parameters = []): mixed
    {
        $reflection = new ReflectionClass(get_class($object));

        $method = $reflection->getMethod($method);

        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    /**
     * Get protected/private property value of a class.
     */
    public function invokeProperty(mixed $object, string $property): mixed
    {
        $reflection = new ReflectionClass(get_class($object));

        $property = $reflection->getProperty($property);

        $property->setAccessible(true);

        return $property->getValue($object);
    }
}
