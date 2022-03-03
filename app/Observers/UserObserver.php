<?php

namespace App\Observers;

use App\Jobs\NewUserMailJob;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        \Log::channel('observer_logger')->info(
            'User created',
            [
                $user
            ]);

        //Welcome mail from new user
        NewUserMailJob::dispatch($user);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function updated(User $user)
    {
        \Log::channel('observer_logger')->info(
            'User updated',
            [
                $user
            ]);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleted(User $user)
    {
        \Log::channel('observer_logger')->info(
            'User deleted',
            [
                $user
            ]);
    }

    /**
     * Handle the User "restored" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function restored(User $user)
    {
        \Log::channel('observer_logger')->info(
            'User restored',
            [
                $user
            ]);
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        \Log::channel('observer_logger')->info(
            'User forceDeleted',
            [
                $user
            ]);
    }
}
