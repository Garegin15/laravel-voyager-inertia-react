<?php

namespace App\Notifications;

use App\Models\Hero;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class HeroCreatedNotification extends Notification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The hero
     * @var mixed
     */
    protected $hero;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
        Log::info($this->hero);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
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
                    ->subject('New hero has been created.')
                    ->line('Hi ' . $notifiable->name)
                    ->line('Good news, new hero has been created')
                    ->line('Name: ' . $this->hero->name)
                    ->line('Health: ' . $this->hero->health)
                    ->line('Have a great day!');
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
