<?php

namespace WireUi\Docs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use WireUi\Docs\Facades\WireUiDocs;

class ClearCacheCommand extends Command
{
    protected $signature = 'wire-docs:clear-cache';

    protected $description = 'Clear the Menu Cache';

    public function handle(): void
    {
        $this->clearMenuCache();

        $sections = WireUiDocs::getSections();

        $sections->each(fn ($section) => $this->removeCache($section));

        $this->info('The cache has been cleared.');
    }

    private function clearMenuCache(): void
    {
        Cache::forget('wireui::menu');
    }

    private function removeCache(string $page): void
    {
        Cache::forget("wireui::next::{$page}");

        Cache::forget("wireui::previous::{$page}");
    }
}
