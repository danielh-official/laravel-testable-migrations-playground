<?php

use App\Models\Widget;
use Illuminate\Support\Facades\Schema;

it('migrates up', function () {
    $this->artisan('migrate');

    expect(Schema::hasTable('users'))->toBeTrue()
        ->and(Schema::hasTable('widgets'))->toBeTrue()
        ->and(function () {
            Widget::factory()->create([
                'name' => null,
            ]);
        })->toThrow(Exception::class)
        ->and(function () {
            Widget::factory()->create([
                'name' => 'Test Widget',
                'description' => null,
                'url' => null,
                'quantity' => null,
            ]);
        })->not->toThrow(Exception::class);
});
