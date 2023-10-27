<?php

namespace WireUi\Docs\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class MenuDocs
{
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
                'Installation',
                'CSS Utilities',
                'Troubleshooting',
            ],
            'Components' => [
                'UI Components' => [
                    'Alert',
                    'Avatar',
                    'Badge',
                    'Card',
                    'Dropdown',
                    'Icon',
                    'Link',
                    'Modal',
                    'Table',
                ],
                'Form Components' => [
                    'Button',
                    'Checkbox',
                    'Color Picker',
                    'Datetime Picker',
                    'Error',
                    'Input',
                    'Native Select',
                    'Radio',
                    'Select',
                    'Textarea',
                    'Time Picker',
                    'Toggle',
                ],
            ],
            'Actions' => [
                'Dialogs',
                'Notifications',
            ],
            'Customize' => [
                'Colors',
                'Components',
                'Contribution Guide',
            ],
            'Advanced' => [
                'Hooks',
            ],
        ]);
    }

    /**
     * Check if menu has the given section.
     */
    public function getSection(string $section): ?array
    {
        return $this->getMenu()->get($this->serializeMenu($section));
    }

    /**
     * Check if menu has the given section.
     */
    public function hasSection(string $section): bool
    {
        return $this->getMenu()->keys()->contains($this->serializeMenu($section));
    }

    /**
     * Check if menu has the given page.
     */
    public function hasPage(string $page, string $section): bool
    {
        $page = $this->serializeMenu($page);

        $pages = collect($this->getSection($section));

        return $pages->contains(function ($item) use ($page) {
            return is_array($item) ? in_array($page, $item, true) : $item === $this->serializeMenu($page);
        });
    }

    // /**
    //  * Get the previous link for the given page in cache.
    //  */
    // public function getPreviousLink(string $page): ?array
    // {
    //     return Cache::sear("wireui::previous::{$page}", fn () => $this->generatePreviousLink($page));
    // }

    // /**
    //  * Generate the previous link for the given page.
    //  */
    // private function generatePreviousLink(string $page): ?array
    // {
    //     $titles = $this->getMenu()->pluck('links')->collapse();

    //     $links = $titles->map(fn ($title) => Str::slug($title));

    //     return [
    //         'title' => $titles->get($links->search($page) - 1),
    //         'href' => '/docs/'.$links->get($links->search($page) - 1),
    //     ];
    // }

    // /**
    //  * Get the next link for the given page in cache.
    //  */
    // public function getNextLink(string $page): ?array
    // {
    //     return Cache::sear("wireui::next::{$page}", fn () => $this->generateNextLink($page));
    // }

    // /**
    //  * Generate the next link for the given page.
    //  */
    // private function generateNextLink(string $page): ?array
    // {
    //     $titles = $this->getMenu()->pluck('links')->collapse();

    //     $links = $titles->map(fn ($title) => Str::slug($title));

    //     return [
    //         'title' => $titles->get($links->search($page) + 1),
    //         'href' => '/docs/'.$links->get($links->search($page) + 1),
    //     ];
    // }

    /**
     * Serialize the given text.
     */
    private function serializeMenu(string $text): string
    {
        return Str::replace('-', ' ', Str::title($text));
    }
}