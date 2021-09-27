<?php

namespace App\Mail;

use App\Distribution;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DistributionMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

   public Distribution $distribution;

    public function __construct(Distribution $distribution)
    {
        $this->distribution = $distribution;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Distribution Inquiry: ' . $this->distribution->name)
        ->markdown('emails.distribution');
    }
}
