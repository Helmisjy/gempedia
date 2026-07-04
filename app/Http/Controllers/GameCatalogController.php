<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GameCatalogController extends Controller
{
    public function index()
    {
        $platforms = Platform::query()->where('is_active', true)->get();
        $games = Game::query()
            ->where('is_active', true)
            ->with(['gamePlatforms.platform', 'genres'])
            ->get();

        return view('customer.catalog', compact('games', 'platforms'));
    }

    public function storeOrder(Request $request)
    {
        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email'],
            'shipping_method' => ['required', 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
        ]);

        $items = $request->input('items');

        if (is_string($items)) {
            $items = json_decode($items, true) ?? [];
        }

        if (! is_array($items) || empty($items)) {
            return back()->withErrors(['items' => 'Pilih minimal satu game sebelum lanjut.']);
        }

        $totalGames = count($items);
        $totalSize = collect($items)->sum('size_gb');
        $recommendedPackage = $this->recommendPackage($totalSize);

        $order = Order::create([
            'customer_name' => $data['customer_name'],
            'whatsapp' => $data['whatsapp'],
            'email' => $data['email'],
            'shipping_method' => $data['shipping_method'],
            'notes' => $data['notes'],
            'status' => 'Pending',
            'total_games' => $totalGames,
            'total_size_gb' => $totalSize,
            'recommended_package' => $recommendedPackage,
        ]);

        foreach ($items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'game_platform_id' => $item['game_platform_id'],
                'title' => $item['title'],
                'platform_name' => $item['platform_name'],
                'size_gb' => $item['size_gb'],
            ]);
        }

        return redirect()->route('customer.catalog')->with('success', 'Order berhasil dibuat. Admin akan segera menghubungi Anda.');
    }

    public function recommendPackage(float $totalSize): string
    {
        if ($totalSize <= 100) {
            return 'Paket Starter';
        }

        if ($totalSize <= 250) {
            return 'Paket Booster';
        }

        return 'Paket Premium';
    }
}
