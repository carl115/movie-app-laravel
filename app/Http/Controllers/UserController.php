<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    public function getUser(User $user)
    {
        return response()->json($user, 200);
    }

    public function create(Request $request)
    {
        try {
            User::create($request->all());
            return response()->json([
                'success' => true,
                'message' => 'User created'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 500);
        }
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'User updated'
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'User deleted'
        ], 200);
    }
}
