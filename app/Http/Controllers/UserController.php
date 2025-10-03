<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
use App\Models\Role; 
use Illuminate\Support\Str;

class UserController extends Controller
{
 public function registerGuest(Request $request)
{
    $request->validate([
        'nickname' => 'required|string|max:255',
        'avatar' => 'nullable|string|max:255',
    ]);

    $guestCode = 'TWL-' . mt_rand(1000, 9999);
$user = User::create([
    'nickname' => $request->nickname ?? 'Guest',
    'avatar' => $request->avatar ?? null,
    'is_guest' => 1,
    'guest_code' => $guestCode,
    
]);

    Progress::create([
        'user_id' => $user->id,
        'current_level' => 1,
        'score' => 0,
    ]);

    return response()->json([
        'message' => 'Guest registered successfully',
        'guest_code' => $guestCode,
        'user' => $user
    ], 201);
}
    public function loginWithCode(Request $request)
{
    $request->validate(['guest_code' => 'required|string']);

    $user = User::where('guest_code', $request->guest_code)->first();

    if (!$user) {
        return response()->json(['message' => 'Invalid code'], 404);
    }

    return response()->json([
        'message' => 'Login successful',
        'user' => $user,
        'progress' => $user->progress  
    ]);
}
    
    public function getRoles()
    {
        $roles = Role::all();  
        return response()->json($roles);
    }

   
    public function getQuiz($level)
    {
      
        $quiz = [
            'level' => $level,
            'questions' => [
                ['id' => 1, 'question' => 'What is 2+2?', 'options' => ['3', '4', '5']],
               
            ]
        ];
        return response()->json($quiz);
    }

   
    public function updateProgress(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'current_level' => 'required|integer|min:1',
            'score' => 'required|integer|min:0',
        ]);

        $progress = Progress::updateOrCreate(
            ['user_id' => $request->user_id],
            [
                'current_level' => $request->current_level,
                'score' => $request->score,
            ]
        );

        return response()->json([
            'message' => 'Progress updated successfully',
            'progress' => $progress
        ]);
    }

    
    public function showProgress($user_id)
    {
        $progress = Progress::where('user_id', $user_id)->first();

        if (!$progress) {
            return response()->json(['message' => 'No progress found'], 404);
        }

        return response()->json($progress);
    }

    public function chooseRole(Request $request, $userId)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($userId);
        $role = Role::findOrFail($request->role_id);

        
        $user->roles()->syncWithoutDetaching([$role->id]);

        return response()->json([
            'message' => 'Role selected successfully!',
            'user' => $user->load('roles'),
        ]);
    }

    public function getUserRole($userId)
    {
        $user = User::with('roles')->findOrFail($userId);

        return response()->json([
            'user' => $user,
            'roles' => $user->roles
        ]);
    }
}