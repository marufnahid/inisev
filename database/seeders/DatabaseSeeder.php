<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Web;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $web = Web::create([
            'name' => 'Inisev',
        ]);

        // Seed Posts
        $post = Post::create([
            'web_id' => $web->id,
            'title' => 'First Post',
            'description' => 'This is the description of the first post.',
            'is_sent' => false
        ]);

        // Seed Subscribers
        Subscription::create([
            'email' => 'subscriber1@example.com',
            'web_id' => $web->id
        ]);

        Subscription::create([
            'email' => 'subscriber2@example.com',
            'web_id' => $web->id
        ]);
    }
}
