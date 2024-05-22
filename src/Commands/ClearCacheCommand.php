<?php

namespace WireUi\Docs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use WireUi\Docs\Facades\WireUiDocs;

class ClearCacheCommand extends Command
{
    protected $signature = 'wire-docs:clear-cache';

    protected $description = 'Clear the Menu Cache';

    public function handle(): int
    {
        $this->clearMenuCache();

        $menu = WireUiDocs::getMenu()->flatten();

        $menu->each(fn ($page) => $this->removeCache($page));

        $this->info('The cache has been cleared.');

        return self::SUCCESS;
    }

    private function clearMenuCache(): void
    {
        Cache::forget('wireui::menu');
    }

    private function removeCache(string $page): void
    {
        $page = Str::slug($page);

        Cache::forget("wireui::next::{$page}");

        Cache::forget("wireui::previous::{$page}");
    }
}
