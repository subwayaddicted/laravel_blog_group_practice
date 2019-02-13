<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpKernel\Tests\HttpCache\request;
use App\Http\Requests\StoreFormvalidation;

class SendMail extends Mailable
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
    public function build(StoreFormvalidation $request)
    {
        return $this->view('letter',['name'=>$request->name,'email'=>$request->email,'body'=>$request->body,'phone'=>$request->phone])->to('682d75fbdf-2a22d8@inbox.mailtrap.io')->from('support@laravel.com');
    }
}
