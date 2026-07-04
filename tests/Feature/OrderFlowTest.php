<?php

use App\Models\Game;
use App\Models\GamePlatform;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Platform;
use App\Models\User;

it('creates an order from selected games and allows admin to update its status', function () {
    $admin = User::factory()->create();

    $platform = Platform::create([
        'name' => 'PC',
        'slug' => 'pc',
        'is_active' => true,
    ]);

    $genre = Genre::create([
        'name' => 'Action',
        'slug' => 'action',
    ]);

    $game = Game::create([
        'title' => 'Test Game',
        'slug' => 'test-game',
        'description' => 'A test game',
        'cover' => 'https://example.com/cover.jpg',
        'is_active' => true,
    ]);

    $game->genres()->attach($genre->id);

    $gamePlatform = GamePlatform::create([
        'game_id' => $game->id,
        'platform_id' => $platform->id,
        'game_code' => 'TEST-PC',
        'size_gb' => 42.5,
        'is_active' => true,
    ]);

    $response = $this->post(route('orders.store'), [
        'customer_name' => 'Ali',
        'whatsapp' => '081234567890',
        'email' => 'ali@example.com',
        'shipping_method' => 'Antar Langsung',
        'notes' => 'Please be careful',
        'items' => [
            [
                'game_platform_id' => $gamePlatform->id,
                'title' => $game->title,
                'platform_name' => $platform->name,
                'size_gb' => $gamePlatform->size_gb,
            ],
        ],
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('orders', [
        'customer_name' => 'Ali',
        'status' => 'Pending',
        'total_games' => 1,
        'total_size_gb' => 42.5,
    ]);

    $order = Order::latest()->first();
    $this->assertDatabaseHas('order_items', [
        'order_id' => $order->id,
        'game_platform_id' => $gamePlatform->id,
    ]);

    $this->actingAs($admin)->patch(route('admin.orders.update', $order), [
        'status' => 'Diproses',
    ])->assertRedirect();

    $order->refresh();
    expect($order->status)->toBe('Diproses');
});
