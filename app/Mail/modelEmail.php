<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class modelEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $model;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('auth.mails.email');
        return $this->from('linfocitossolution@gmail.com')
        ->view('auth.mails.email', compact('model'))
        ->text('auth.mails.text')
        ->with(
          [
                'testVarOne' => '1',
                'testVarTwo' => '2',
          ])
          ->attach(public_path('/imagenes').'/cs.jpg', [
                  'as' => 'cs.jpg',
                  'mime' => 'image/jpeg',
                  ]);
    }
}
