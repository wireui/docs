<?php

namespace WireUI\Docs\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class CheckPage
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $page = $request->page;

        abort_unless(is_null($page) || $this->hasPage($page), Response::HTTP_NOT_FOUND);

        return $next($request);
    }

    /**
     * Check if the given page exists.
     */
    private function hasPage(string $page): bool
    {
        return File::exists(__DIR__."/../resources/views/documentation/{$page}.blade.php");
    }
}
