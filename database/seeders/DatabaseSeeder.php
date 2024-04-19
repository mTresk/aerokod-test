<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Random\RandomException;

class DatabaseSeeder extends Seeder
{
    /**
     * @throws RandomException
     */
    public function run(): void
    {
        User::factory(10)
            ->has(Post::factory(random_int(2, 4))
                ->has(Comment::factory(random_int(2, 3))))
            ->create();
    }
}
