<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormFilledNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $restaurant;
    public $guest;


    public function __construct($restaurant, $guest)
    {
        $this->restaurant = $restaurant;
        $this->guest = $guest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Danke ' . ucfirst($this->guest->name))
            ->line('Danke ' . ucfirst($this->guest->name))
//            ->line('You filled out the form on ' . now()->toFormattedDateString() . ' at ' . now()->format('H:i A') .
//                ' from restaurant ' . ucfirst($this->restaurant->firmname))
            ->line('Du hast das Corona-Formular am ' . now()->toFormattedDateString() . ' um ' . now()->format('H:i A') .
                ' Uhr im Restaurant ' . ucfirst($this->restaurant->firmname).' ausgefüllt')
            ->line('Vielen Dank, dass du unsere Anwendung  genutzt hast!')
            ->line('Bitte zeige diese Bestätigung auf Verlangen dem Servicepersonal');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
