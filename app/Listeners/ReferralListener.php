<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ReferralListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(ReferralMail $event)
    {
        if(isset($event->user1->name)){
            $project = [
        'greeting' => 'Hello ' . $event->user1->name . ',',
            'subject' => 'Account Created Successfully',
            'body' => 'Your password is'.' '.Carbon::now()->format('d-M-Y  g:i:s A').'.'.' '.'If it was not done by you please contact technical support '.' '."$event->user->name#benefitshop"' ',
            'actionText' => 'Login ' . $event->user1->getReferralLink(),
            'actionURL' => url('/login'),
        ];
        try {
            Notification::send($event->user1, new EmailNotification($project));
        } catch (\Throwable $th) {
        }
        }
    }
}
