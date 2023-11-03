<?php

namespace WireUi\Docs\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class MenuDocs
{
    /**
     * Reject this pages in previous and next links.
     */
    private array $reject = ['Table'];

    /**
     * Get the menu.
     */
    public function getMenu(): Collection
    {
        return Cache::sear('wireui::menu', fn () => $this->generateMenu());
    }

    /**
     * Generate the menu.
     */
    private function generateMenu(): Collection
    {
        return collect([
            'Getting Started' => [
                'Getting Started' => [
                    'Installation',
                    'CSS Utilities',
                    'Troubleshooting',
                ],
            ],
            'Components' => [
                'UI Components' => [
                    'Alert',
                    'Avatar',
                    'Badge',
                    'Button',
                    'Card',
                    'Dropdown',
                    'Icon',
                    'Link',
                    'Modal',
                    'Table',
                ],
                'Form Components' => [
                    'Checkbox',
                    'Color Picker',
                    'Currency',
                    'Datetime Picker',
                    'Errors',
                    'Input',
                    'Maskable',
                    'Native Select',
                    'Number',
                    'Password',
                    'Phone',
                    'Radio',
                    'Select',
                    'Textarea',
                    'Time Picker',
                    'Toggle',
                ],
            ],
            'Actions' => [
                'Actions' => [
                    'Dialogs',
                    'Notifications',
                ],
            ],
            'Customize' => [
                'Customize' => [
                    'Colors',
                    'Components',
                    'Contribution Guide',
                ],
            ],
            'Advanced' => [
                'Advanced' => [
                    'Hooks',
                ],
            ],
        ]);
    }

    /**
     * Check if menu has the given section.
     */
    public function getSection(string $section): ?array
    {
        return $this->getMenu()->mapWithKeys(function ($section, $key) {
            return [Str::slug($key) => $section];
        })->get($section);
    }

    /**
     * Get the default page for the given section.
     */
    public function getDefaultPage(string $slug): ?string
    {
        return match ($slug) {
            'getting-started' => 'installation',
            'components' => 'alert',
            'actions' => 'dialogs',
            'customize' => 'colors',
            'advanced' => 'hooks',
            default => null,
        };
    }

    /**
     * Check if menu has the given section.
     */
    public function hasSection(string $section): bool
    {
        $sections = $this->getMenu()->keys()->transform(fn ($item) => Str::slug($item));

        return $sections->contains($section);
    }

    /**
     * Check if menu has the given page.
     */
    public function hasPage(string $page, string $section): bool
    {
        $pages = collect($this->getSection($section))->collapse();

        return $pages->transform(fn ($item) => Str::slug($item))->contains($page);
    }

    /**
     * Get the previous link for the given page in cache.
     */
    public function getPreviousLink(string $page): array
    {
        return Cache::sear("wireui::previous::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position - 1);
        });
    }

    /**
     * Get the next link for the given page in cache.
     */
    public function getNextLink(string $page): array
    {
        return Cache::sear("wireui::next::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position + 1);
        });
    }

    /**
     * Get the position menu for the given page.
     */
    private function getPositionMenu(string $page, callable $callback): array
    {
        $titles = $this->getMenu()->mapWithKeys(function ($section, $key) {
            return [Str::slug($key) => collect($section)->collapse()->toArray()];
        });

        $titles1 = $titles->collapse()->reject(fn ($item) => in_array($item, $this->reject))->values();

        $titles2 = $titles1->map(fn ($item) => Str::slug($item));

        $title = $titles1->get($callback($titles2->search($page)));

        $section = $titles->search(fn ($item) => in_array($title, $item));

        return [
            'title' => $title,
            'href' => "/{$section}/".Str::slug($title),
        ];
    }
}
