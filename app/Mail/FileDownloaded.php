<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FileDownloaded extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('files@mailtrap.io')
        ->view('emails.files_downloaded')
        ->attach(storage_path('app/file.txt'), [
            'as' => 'secret.txt'
        ]);
        return $this->view('view.name');
    }
}
