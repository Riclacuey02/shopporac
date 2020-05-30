<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function dashboard()
    {
    	return view('users.dashboard');
    }

    public function listing()
    {
    	return view('users.listing');
    }

    public function profile()
    {
    	return view('users.profile');
    }

    public function edit(Users $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Users $user)
    {
        Users::updateInfo($this->validateUser($user), $user);
        return redirect( route('user.edit', $user) );
    }    

    protected function validateUser($user){
        return request()->validate([
            'name' => 'sometimes|required|min:1|max:255|unique:users,name,'.$user->id,
            'fname' => 'nullable|min:1|max:255',
            'lname' => 'nullable|min:1|max:255',
            'email' => 'sometimes|required|email|min:1|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8|max:255',
            'confirm_password' => 'same:password',
        ]);
    }
}
