<?php

namespace WireUi\Docs\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class WireUiDocsSupport
{
    public function getMenu(): Collection
    {
        return collect(Cache::sear('wireui::menu', fn () => config('docs.menu')));
    }

    public function hasSection(string $section): bool
    {
        return $this->getMenu()->keys()->slugify()->contains($section);
    }

    public function getSection(string $section): Collection
    {
        return collect($this->getMenu()->first(fn ($item, $key) => Str::slug($key) === $section));
    }

    public function getDefaultPage(string $section): ?string
    {
        $options = config('docs.default_pages');

        return data_get($options, $section);
    }

    public function getComponentApi(string $component): ?array
    {
        $apis = config('docs.components_api');

        return data_get($apis, $component);
    }

    public function hasPage(string $page, string $section): bool
    {
        $pages = $this->getSection($section)->flatten();

        return $pages->slugify()->contains($page);
    }

    public function getPreviousLink(string $page): ?array
    {
        return Cache::sear("wireui::previous::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position - 1);
        });
    }

    public function getNextLink(string $page): ?array
    {
        return Cache::sear("wireui::next::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position + 1);
        });
    }

    /**
     * Generic method to get the previous or next link.
     */
    private function getSectionByPage(string $page): ?string
    {
        return $this->getMenu()->search(function ($item) use ($page) {
            return collect($item)->flatten()->slugify()->contains($page);
        });
    }

    private function getPositionMenu(string $page, callable $callback): ?array
    {
        $pages = $this->getMenu()->flatten()->values();

        $position = $pages->slugify()->search($page);

        if ($position === false) {
            return null;
        }

        $title = $pages->get($callback($position));

        $section = $this->getSectionByPage(Str::slug($title));

        return blank($title) ? null : [
            'title' => $title,
            'href' => sprintf('/%s/%s', Str::slug($section), Str::slug($title)),
        ];
    }
}
