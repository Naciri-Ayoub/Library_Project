<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Order::create([
            'client_id'=>1,
            'product_id'=>1,
            'delivery_address'=>'agadir',
            'phone'=>'0321654987',
            'total'=>1231

        ]);
        Order::create([
            'client_id'=>1,
            'product_id'=>1,
            'delivery_address'=>'agadir1',
            'phone'=>'0321654987',
            'total'=>1231

        ]);
        Order::create([
            'client_id'=>1,
            'product_id'=>1,
            'delivery_address'=>'agadir2',
            'phone'=>'0321654987',
            'total'=>1231

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
