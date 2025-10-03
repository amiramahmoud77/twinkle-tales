<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GuestController extends Controller
{
   
    public function register(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|max:255',
            'avatar'   => 'required|string',
        ]);

        $guestCode = 'TWL-' . rand(1000, 9999);

        $user = User::create([
            'nickname'   => $request->nickname,
            'avatar'     => $request->avatar,
            'is_guest'   => true,
            'guest_code' => $guestCode,
        ]);

        return response()->json([
            'message'     => 'Guest registered successfully!',
            'guest_code'  => $guestCode,
        ]);
    }

   
    public function login(Request $request)
    {
        $request->validate([
            'guest_code' => 'required|string',
        ]);

        $user = User::where('guest_code', $request->guest_code)->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid guest code'], 404);
        }

        return response()->json([
            'message'   => 'Login successful',
            'nickname'  => $user->nickname,
            'avatar'    => $user->avatar,
        ]);
    }
}
