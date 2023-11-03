<?php

namespace WireUi\Docs\Examples;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request): Collection
    {
        return User::query()
            ->select('id', 'name', 'email')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->orderBy('name')
            ->get()
            ->map(function (User $user) {
                $user->profile_image = "https://picsum.photos/300?id={$user->id}";

                return $user;
            });
    }
}
