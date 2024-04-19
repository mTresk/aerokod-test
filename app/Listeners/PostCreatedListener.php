<?php

namespace App\Listeners;

use App\Events\PostCreatedEvent;
use App\Mail\PostCreatedMail;
use Illuminate\Support\Facades\Mail;

class PostCreatedListener
{
    public function handle(PostCreatedEvent $event): void
    {
        Mail::to(config('services.admin-email'))->queue(new PostCreatedMail($event->post));
    }
}
