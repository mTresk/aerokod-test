<?php

namespace App\Listeners;

use App\Events\PostUpdatedEvent;
use App\Mail\PostUpdatedMail;
use Illuminate\Support\Facades\Mail;

class PostUpdatedListener
{
    public function handle(PostUpdatedEvent $event): void
    {
        Mail::to(config('services.admin-email'))->queue(new PostUpdatedMail($event->post));
    }
}
