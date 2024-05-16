<?php

namespace WireUi\Docs\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use WireUi\Docs\Facades\WireUiDocs;

class CheckDocs
{
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $section = $request->section;

        $page = $request->page ?? WireUiDocs::getDefaultPage($section);

        abort_unless(WireUiDocs::hasSection($section), Response::HTTP_NOT_FOUND);

        abort_unless(WireUiDocs::hasPage($page, $section), Response::HTTP_NOT_FOUND);

        return $next($request);
    }
}
