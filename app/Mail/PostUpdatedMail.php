<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    private object $post;


    public function __construct($post)
    {
        $this->post = $post;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Пост обновлен',
        );
    }

    public function content(): Content
    {
        $user = User::find($this->post->user_id);

        return new Content(
            markdown: 'mail.post-updated',
            with: ['data' => $this->post, 'user' => $user]
        );
    }
}
