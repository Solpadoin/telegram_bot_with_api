<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramChannel;

class TelegramVideoNotify extends Notification
{
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramFile::create()->to($notifiable->telegram_user_id)->content('Hi')->video('https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_480_1_5MG.mp4');
    }
}
