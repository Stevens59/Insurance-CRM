<?php

namespace App\Mail;

use App\Last;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PolicyExpired extends Mailable
{
    use Queueable, SerializesModels;
    public $lasts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lasts)
    {
        $this->lasts = $lasts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.policy.expired');
    }
}
