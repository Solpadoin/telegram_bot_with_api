<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function send()
    {
        // 
    }

    public function recieve(Request $request)
    {
        return response()->json(['success' => true, 'data' => $request->all(), 'message' => 'OK']);
    }
}
