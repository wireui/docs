<?php

namespace WireUi\Docs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ClearCacheCommand extends Command
{
    protected $signature = 'wire-docs:clear-cache';

    protected $description = 'Clear the Menu Cache';

    public function handle(): void
    {
        $this->clearMenuCache();

        $files = $this->getFilesName();

        $files->each(fn ($file) => $this->removeCache($file));

        $this->info('The cache has been cleared.');
    }

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

    private function removeCache(string $page): void
    {
        Cache::forget("wireui::next::{$page}");

        Cache::forget("wireui::previous::{$page}");
    }
}
