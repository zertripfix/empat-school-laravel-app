<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = Category::factory(5)->create();

        $tags = Tag::factory(10)->create();

        Product::factory(50)->make()->each(function ($product) use ($categories, $tags) {
            $product->category_id = $categories->random()->id;
            $product->save();

            $product->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray()
            );
        });

        // $this->call([
        //     CategorySeeder::class,
        //     TagSeeder::class,
        //     ProductSeeder::class,
        // ]);
    }
}
