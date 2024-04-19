<?php

namespace App\Observers;

use App\Events\PostCreatedEvent;
use App\Events\PostUpdatedEvent;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostObserver
{
    public function created(Post $post): void
    {
        event(new PostCreatedEvent($post));

        Cache::forget('posts');
    }

    public function updated(Post $post): void
    {
        event(new PostUpdatedEvent($post));

        Cache::forget('posts');
    }

    public function deleted(): void
    {
        Cache::forget('posts');
    }
}
