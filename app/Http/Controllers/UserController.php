<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
        // return response()->json(["users"=>$users],200);
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Crypt::encrypt($input['password']);
        $user = User::create($input);
        return ['message' => 'User created', 'user' => $user];
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();
        $user->update($input);
        return ['message' => 'User updated', 'user' => $user];
    }

    public function destroy($id)
    {
        User::destroy($id);
        return 'User deleted.';
    }
}
