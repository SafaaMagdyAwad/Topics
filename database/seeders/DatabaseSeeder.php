<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Message;
use App\Models\Subscripe;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        Message::factory(10)->create();
        User::factory(10)->create();
        Topic::factory(20)->create();
        Testimonial::factory(10)->create();
        Subscripe::factory(6)->create();


    }
}
