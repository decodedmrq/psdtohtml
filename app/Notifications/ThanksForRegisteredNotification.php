<?php

namespace App\Notifications;

use App\Models\Guest;
use Illuminate\Notifications\Messages\MailMessage;

class ThanksForRegisteredNotification extends Notification
{
    public $guest;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Guest $guest)
    {
        $this->guest = $guest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->subject(trans('email.thanks_for_registered'))->view('emails.thanks_for_registered', [
            'guest' => $this->guest
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
