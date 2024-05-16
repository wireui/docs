<?php

namespace WireUi\Docs\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use WireUi\Docs\Support\WireUiDocsSupport;

/**
 * @method static Collection getMenu()
 * @method static bool hasSection(string $section)
 * @method static Collection getSections()
 * @method static ?array getSection(string $section)
 * @method static ?string getDefaultPage(string $section)
 * @method static mixed getComponentApi(string $component)
 * @method static bool hasPage(string $page, string $section)
 * @method static array getPreviousLink(string $page)
 * @method static array getNextLink(string $page)
 */
class WireUiDocs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WireUiDocsSupport::class;
    }
}
