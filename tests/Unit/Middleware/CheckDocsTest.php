<?php

use Illuminate\Support\Str;
use WireUi\Docs\Facades\WireUiDocs;

test('it should check if all pages exist', function () {
    $menu = WireUiDocs::getMenu();

    $menu->each(function ($pages, $section) {
        $section = Str::slug($section);

        $pages = collect($pages)->flatten();

        $pages->each(function ($page) use ($section) {
            $page = Str::slug($page);

            $this->get("/{$section}/{$page}")->assertOk();
        });
    });
});

test('it should check if all pages do not exist', function () {
    collect()->range(1, 10)->each(function () {
        $page = fake()->slug();
        $section = fake()->slug();

        $this->get("/{$section}/{$page}")->assertNotFound();
    });
});
