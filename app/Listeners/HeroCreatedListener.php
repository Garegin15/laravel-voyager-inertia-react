<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\HeroCreatedNotification;
use Illuminate\Support\Facades\Log;

class HeroCreatedListener
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
    public function handle($event)
    {
        $hero = $event->hero;

        /**
         * Get admin from the database, we can find by role_id 1
         */
        $admin = User::where('role_id', 1)->get()->first();

        if (!$admin) return;

        $admin->notify(new HeroCreatedNotification($hero));
    }
}
