<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Customer;
class EmailReport extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    protected $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($loans,$id)
    {
        //
        $this->data = $loans;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $loans = $this->data;
        $id = $this->id;
        return  $this->from(env('MAIL_FROM_ADDRESS'))
                        ->subject('Requested Report')
                        ->view('loan',compact('loans','id'))
                        ->attach(storage_path('report.pdf'));
    }
}
