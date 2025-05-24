<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCvToHr extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $file;

    public function __construct($data, $file)
    {
        $this->data = $data;
        $this->file = $file;
    }

    public function build()
    {
        return $this->subject('New CV Submission')
            ->view('emails.cv') 
            ->attach($this->file->getRealPath(), [
                'as' => $this->file->getClientOriginalName(),
                'mime' => $this->file->getMimeType(),
            ]);
    }
}
