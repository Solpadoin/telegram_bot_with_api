<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Telegram\BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Telegram;

class DispatchController extends BaseController
{
    public function get(Request $request) 
    {
        return $this->recieve($request);
    }

    public function notify()
    {
        $users = User::all();

        foreach ($users as $user) {
            try {
                Telegram::sendUserData($user);
                Telegram::sendVideo($user);
            }
            catch (\Exception $e) {
                info($e);
            }
            finally {
                info('Processed user with ID '.$user->telegram_user_id);
            }
        }

        return response()->json(['data' => true, 'app' => PHP_VERSION]);
    }
}
