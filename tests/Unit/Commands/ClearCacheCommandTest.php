<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use WireUi\Docs\Facades\WireUiDocs;

test('it should clear the cache', function () {
    Cache::spy();

    Cache::shouldReceive('sear')
        ->with('wireui::menu', Closure::class)
        ->andReturn(collect(config('docs.menu')));

    $this->artisan('wire-docs:clear-cache')
        ->expectsOutput('The cache has been cleared.')
        ->assertSuccessful();

    Cache::shouldHaveReceived('forget')->with('wireui::menu');

    WireUiDocs::getMenu()->flatten()->each(function ($page) {
        $page = Str::slug($page);

        Cache::shouldHaveReceived('forget')->with("wireui::next::{$page}");
        Cache::shouldHaveReceived('forget')->with("wireui::previous::{$page}");
    });
});
