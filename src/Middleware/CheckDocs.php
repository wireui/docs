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
        $section = $request->section;

        $page = $request->page ?? Menu::getDefaultPage($section);

        abort_unless(Menu::hasSection($section), Response::HTTP_NOT_FOUND);

        abort_unless(Menu::hasPage($page, $section), Response::HTTP_NOT_FOUND);

        return $next($request);
    }
}
