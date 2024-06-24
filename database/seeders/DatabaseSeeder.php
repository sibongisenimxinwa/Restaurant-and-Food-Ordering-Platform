<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        \App\Models\Slider::factory(3)->create();
        $this->call(WhyChooseUsTitleSeeder::class);
        \App\Models\WhyChooseUs::factory(4)->create();
        $this->call(CategorySeeder::class);
        \App\Models\Product::factory(10)->create();
        \App\Models\Coupon::factory(3)->create();
        $this->call(MenuBuilderSeeder::class);
    }
}
