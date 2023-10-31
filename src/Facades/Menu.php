<?php

namespace WireUi\Docs\Facades;

use Illuminate\Support\Facades\Facade;
use WireUi\Docs\Support\MenuDocs;

/**
 * @method static \Illuminate\Support\Collection getMenu()
 * @method static ?array getSection(string $section)
 * @method static ?string getDefaultPage(string $section)
 * @method static bool hasSection(string $section)
 * @method static bool hasPage(string $page, string $section)
 * @method static array getPreviousLink(string $page)
 * @method static array getNextLink(string $page)
 */
class Menu extends Facade
{
    /**
     * Get the facade accessor.
     */
    protected static function getFacadeAccessor(): string
    {
        return MenuDocs::class;
    }
}
