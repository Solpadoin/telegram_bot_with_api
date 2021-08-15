<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $token = $request->bearerToken();

        if (isset($token)) {
            $user = User::where('remember_token', $token)->first();
            return response()->json(['success' => $user->delete()], 200);
        }

        return response()->json(['success' => false], 404);
    }
}
