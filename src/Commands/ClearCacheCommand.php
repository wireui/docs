<?php

namespace WireUi\Docs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ClearCacheCommand extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'wire-docs:clear-cache';

    /**
     * The console command description.
     */
    protected $description = 'Clear the Menu Cache';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->clearMenuCache();

        $files = $this->getFilesName();

        $files->each(fn ($file) => $this->removeCache($file));

        $this->info('The cache has been cleared.');
    }

    /**
     * Clear the menu cache.
     */
    private function clearMenuCache(): void
    {
        Cache::forget('wireui::menu');
    }

    private function getFilesName(): Collection
    {
        $docs = File::allFiles(__DIR__.'/../resources/views/sections');

        return collect($docs)->map(function ($file) {
            return Str::remove('.blade.php', $file->getFilename());
        });
    }

    /**
     * Remove the cache for the given page.
     */
    private function removeCache(string $page): void
    {
        Cache::forget("wireui::next::{$page}");

        Cache::forget("wireui::previous::{$page}");
    }
}
