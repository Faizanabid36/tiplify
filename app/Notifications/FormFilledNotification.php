<?php

namespace App\Notifications;

use Carbon\Carbon;
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
            ->subject('Thank You ' . ucfirst($this->guest->name))
            ->line('Thanks ' . ucfirst($this->guest->name))
            ->line('You filled the form on ' . now()->toFormattedDateString() . ' at ' . now()->format('H:i A') .
                ' for Restaurant ' . ucfirst($this->restaurant->firmname) .
                ' for reservation of ' . $this->guest->seats . ' seats on date: ' .
                Carbon::parse($this->guest->date)->toFormattedDateString())
            ->line('Thank you for using our application!')
            ->line('Please show this confirmation to the service staff on request');
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
