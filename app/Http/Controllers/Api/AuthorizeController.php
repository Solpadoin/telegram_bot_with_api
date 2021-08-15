<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthorizeController extends Controller
{
    public function authorizeUser(Request $request)
    {
       $token = $request->bearerToken();

       if (isset($token) && User::where('remember_token', $token)->first()) {
           return response()->json(['success' => false, 'data' => [], 'message' => 'Already logged in!'], 200);
       }

       $user = new User();
       $user->setRememberToken(Str::random(60));

       if (! $user->save()) {
           return response()->json(['success' => false, 'data' => [], 'message' => 'Can\'t authorize user'], 400);
       }

       return response()->json(['success' => true, 'data' => $user->getRememberToken(), 'message' => 'Successfully authorizated current user!']);
    }
}
