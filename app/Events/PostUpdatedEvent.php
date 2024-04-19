<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostUpdatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public object $post;

    public function __construct($post)
    {
        $this->post = $post;
    }
}
