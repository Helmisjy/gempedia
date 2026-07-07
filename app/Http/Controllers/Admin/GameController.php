<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Models\Game;
use App\Models\GamePlatform;
use App\Models\Genre;
use App\Models\Platform;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with(['genres', 'gamePlatforms.platform'])->latest()->paginate(50);
        $totalCollection = Game::count();

        $totalStorage = GamePlatform::sum('size_gb');

        $largestGame = GamePlatform::with('game')
            ->orderByDesc('size_gb')
            ->first();


        return view('admin.games.index', compact('games', 'totalCollection', 'totalStorage', 'largestGame'));
    }

    public function create()
    {
        $platforms = Platform::where('is_active', true)->get();
        $genres = Genre::all();

        return view('admin.games.create', compact('platforms', 'genres'));
    }

    public function store(StoreGameRequest $request)
    {
        $validated = $request->validated();
        $game = Game::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'] ?? str($validated['title'])->slug()->toString(),
            'description' => $validated['description'] ?? null,
            'cover' => $validated['cover'] ?? null,
            'release_year' => $validated['release_year'] ?? null,
            'publisher' => $validated['publisher'] ?? null,
            'developer' => $validated['developer'] ?? null,
            'is_active' => $validated['is_active'] ?? true,
        ]);

        $game->genres()->sync([$validated['genre_id']]);

        GamePlatform::create([
            'game_id' => $game->id,
            'platform_id' => $validated['platform_id'],
            'game_code' => strtoupper(str($game->slug)->slug()->append('-'.$validated['platform_id'])->toString()),
            'size_gb' => $validated['size_gb'],
            'is_active' => true,
        ]);

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil ditambahkan.');
    }

    public function show(Game $game)
    {
        $game->load(['genres', 'gamePlatforms.platform']);

        return view('admin.games.show', compact('game'));
    }
}
