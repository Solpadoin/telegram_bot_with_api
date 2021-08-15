<?php

namespace App\Services;

use App\Models\User;
use App\Notifications\TelegramNotify;
use App\Notifications\TelegramVideoNotify;

class TelegramService
{
    public function sendUserData(User $user)
    {
        $user->notify(new TelegramNotify());
    }

    public function sendVideo(User $user)
    {
        $user->notify(new TelegramVideoNotify());
    }
}
