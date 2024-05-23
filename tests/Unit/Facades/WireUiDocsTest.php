<?php

use Illuminate\Support\Str;
use WireUi\Docs\Facades\WireUiDocs;

test('it should check sections', function () {
    expect(WireUiDocs::hasSection('actions'))->toBeTrue();
    expect(WireUiDocs::hasSection('packages'))->toBeTrue();
    expect(WireUiDocs::hasSection('customize'))->toBeTrue();
    expect(WireUiDocs::hasSection('components'))->toBeTrue();
    expect(WireUiDocs::hasSection('getting-started'))->toBeTrue();

    collect()->range(1, 5)->each(function () {
        $section = fake()->word();

        expect(WireUiDocs::hasSection($section))->toBeFalse();
    });
});

test('it should check default pages', function () {
    expect(WireUiDocs::getDefaultPage('actions'))->toBe('hooks');
    expect(WireUiDocs::getDefaultPage('customize'))->toBe('colors');
    expect(WireUiDocs::getDefaultPage('components'))->toBe('alert');
    expect(WireUiDocs::getDefaultPage('getting-started'))->toBe('installation');
    expect(WireUiDocs::getDefaultPage('packages'))->toBe('alpinejs-hold-directive');
});

test('it should check components api', function () {
    $apis = collect(config('docs.components_api'))->keys();

    $apis->each(fn ($api) => expect(WireUiDocs::getComponentApi($api))->not->toBeNull());
});

test('it should check pages', function () {
    $menu = collect(config('docs.menu'));

    $menu->each(function ($pages, $section) {
        $section = Str::slug($section);

        $pages = collect($pages)->flatten()->slugify();

        $pages->each(fn ($page) => expect(WireUiDocs::hasPage($page, $section))->toBeTrue());
    });

    collect()->range(1, 10)->each(function () {
        $page = fake()->slug();
        $section = fake()->slug();

        expect(WireUiDocs::hasPage($page, $section))->toBeFalse();
    });
});

test('it should check links', function () {
    expect(WireUiDocs::getPreviousLink('installation'))->toBeNull();
    expect(WireUiDocs::getNextLink('installation'))->toBe([
        'title' => 'CSS Utilities',
        'href' => '/getting-started/css-utilities',
    ]);

    expect(WireUiDocs::getPreviousLink('troubleshooting'))->toBe([
        'title' => 'CSS Utilities',
        'href' => '/getting-started/css-utilities',
    ]);
    expect(WireUiDocs::getNextLink('troubleshooting'))->toBe([
        'title' => 'Alert',
        'href' => '/components/alert',
    ]);

    expect(WireUiDocs::getPreviousLink('alert'))->toBe([
        'title' => 'Troubleshooting',
        'href' => '/getting-started/troubleshooting',
    ]);
    expect(WireUiDocs::getNextLink('alert'))->toBe([
        'title' => 'Avatar',
        'href' => '/components/avatar',
    ]);

    expect(WireUiDocs::getPreviousLink('modal'))->toBe([
        'title' => 'Link',
        'href' => '/components/link',
    ]);
    expect(WireUiDocs::getNextLink('modal'))->toBe([
        'title' => 'Checkbox',
        'href' => '/components/checkbox',
    ]);

    expect(WireUiDocs::getPreviousLink('table'))->toBeNull();
    expect(WireUiDocs::getNextLink('table'))->toBeNull();

    expect(WireUiDocs::getPreviousLink('checkbox'))->toBe([
        'title' => 'Modal',
        'href' => '/components/modal',
    ]);
    expect(WireUiDocs::getNextLink('checkbox'))->toBe([
        'title' => 'Color Picker',
        'href' => '/components/color-picker',
    ]);

    expect(WireUiDocs::getPreviousLink('toggle'))->toBe([
        'title' => 'Time Picker',
        'href' => '/components/time-picker',
    ]);
    expect(WireUiDocs::getNextLink('toggle'))->toBe([
        'title' => 'Hooks',
        'href' => '/actions/hooks',
    ]);

    expect(WireUiDocs::getPreviousLink('hooks'))->toBe([
        'title' => 'Toggle',
        'href' => '/components/toggle',
    ]);
    expect(WireUiDocs::getNextLink('hooks'))->toBe([
        'title' => 'Dialogs',
        'href' => '/actions/dialogs',
    ]);

    expect(WireUiDocs::getPreviousLink('notifications'))->toBe([
        'title' => 'Dialogs',
        'href' => '/actions/dialogs',
    ]);
    expect(WireUiDocs::getNextLink('notifications'))->toBe([
        'title' => 'Colors',
        'href' => '/customize/colors',
    ]);

    expect(WireUiDocs::getPreviousLink('colors'))->toBe([
        'title' => 'Notifications',
        'href' => '/actions/notifications',
    ]);
    expect(WireUiDocs::getNextLink('colors'))->toBe([
        'title' => 'Components',
        'href' => '/customize/components',
    ]);

    expect(WireUiDocs::getPreviousLink('contribution-guide'))->toBe([
        'title' => 'Components',
        'href' => '/customize/components',
    ]);
    expect(WireUiDocs::getNextLink('contribution-guide'))->toBe([
        'title' => 'AlpineJS Hold Directive',
        'href' => '/packages/alpinejs-hold-directive',
    ]);

    expect(WireUiDocs::getPreviousLink('alpinejs-hold-directive'))->toBe([
        'title' => 'Contribution Guide',
        'href' => '/customize/contribution-guide',
    ]);
    expect(WireUiDocs::getNextLink('alpinejs-hold-directive'))->toBe([
        'title' => 'Breadcrumbs',
        'href' => '/packages/breadcrumbs',
    ]);

    expect(WireUiDocs::getPreviousLink('phosphor-icons'))->toBe([
        'title' => 'Heroicons',
        'href' => '/packages/heroicons',
    ]);
    expect(WireUiDocs::getNextLink('phosphor-icons'))->toBeNull();
});
