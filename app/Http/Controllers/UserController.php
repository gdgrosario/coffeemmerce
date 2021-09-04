<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $users = User::all();
        return response()->json([
            'ok'=> true,
            'users' => $users
        ], 200);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'ok'=> true,
            'user' => $user
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();
        $user->update($input);
        return response()->json([
            'ok'=> true,
            'message' => 'User updated',
            'user' => $user
        ], 200);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json([
            'ok'=> true,
            'message' => 'User deleted'
        ], 200);
    }
}
