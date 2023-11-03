<?php

namespace WireUi\Docs\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class MenuDocs
{
    private array $reject = ['Table'];

    public function getMenu(): Collection
    {
        return Cache::sear('wireui::menu', fn () => $this->generateMenu());
    }

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

    public function getSection(string $section): ?array
    {
        return $this->getMenu()->mapWithKeys(function ($section, $key) {
            return [Str::slug($key) => $section];
        })->get($section);
    }

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

    public function hasSection(string $section): bool
    {
        $sections = $this->getMenu()->keys()->transform(fn ($item) => Str::slug($item));

        return $sections->contains($section);
    }

    public function hasPage(string $page, string $section): bool
    {
        $pages = collect($this->getSection($section))->collapse();

        return $pages->transform(fn ($item) => Str::slug($item))->contains($page);
    }

    public function getPreviousLink(string $page): array
    {
        return Cache::sear("wireui::previous::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position - 1);
        });
    }

    public function getNextLink(string $page): array
    {
        return Cache::sear("wireui::next::{$page}", function () use ($page) {
            return $this->getPositionMenu($page, fn ($position) => $position + 1);
        });
    }

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
