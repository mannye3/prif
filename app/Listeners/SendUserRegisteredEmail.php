<?php
namespace App\Listeners;

use App\Events\UserRegisteredEvent;
use App\Mail\AccountInformation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendUserRegisteredEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserRegisteredEevent  $event
     * @return void
     */
    public function handle(UserRegisteredEvent $event)
    {

        $data = [
            'name'  => $event->user->name,
            'email' => $event->user->email,
            // 'token' => $event->token,
            // 'link' => route('verify', ['token' => $event->token])

        ];

        Mail::to($event->user->email)->send(new AccountInformation($data));

    }
}
