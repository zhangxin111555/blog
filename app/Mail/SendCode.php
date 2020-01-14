<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-09 08:58:53
 * @LastEditTime : 2020-01-09 14:01:29
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCode extends Mailable
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
        $code = rand(10000,99999);
        return $this->from('3150289960@qq.com')
        ->view('email',['code'=>$code]);

        return $this->view('view.name');
    }
}
