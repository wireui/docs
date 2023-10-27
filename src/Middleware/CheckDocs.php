<?php

namespace WireUi\Docs\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use WireUi\Docs\Facades\Menu;

class CheckDocs
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $page = $request->page;

        $section = $request->section;

        abort_unless(Menu::hasSection($section), Response::HTTP_NOT_FOUND);

        abort_unless(is_null($page) || Menu::hasPage($page, $section), Response::HTTP_NOT_FOUND);

        return $next($request);
    }
}
