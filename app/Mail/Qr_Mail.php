<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Qr_Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $id;
   
    public function __construct($id)
    {
        $this->id = $id;
    }
   
    /**
     * Get the message envelope.
     */

     public function build()
     {
        // dd( $this->id);
        return $this->subject(' Exclusive QR Code  Download Inside! 🌟')
        ->view('pages.qr_mail')
        ->with(['id'=>$this->id]);
     }


    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Qr Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
