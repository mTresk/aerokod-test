<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class CommentObserver
{
    public function created(): void
    {
        Cache::forget('posts');
    }

    public function updated(): void
    {
        Cache::forget('posts');
    }

    public function deleted(): void
    {
        Cache::forget('posts');
    }
}
