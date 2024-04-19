<?php

namespace App\Observers;

use App\Events\PostCreatedEvent;
use App\Events\PostUpdatedEvent;
use App\Models\Post;

class PostObserver
{
    public function created(Post $post): void
    {
        event(new PostCreatedEvent($post));
    }

    public function updated(Post $post): void
    {
        event(new PostUpdatedEvent($post));
    }
}
