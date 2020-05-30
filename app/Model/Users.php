<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    
  	protected $table = 'users';

    protected $fillable = [
        'name', 'fname', 'lname', 'email', 'password_raw', 'password', 'thumbnail',
    ];

    public static function updateInfo($data, $user){
    	$d = [
    		'name' => $data['name'],
    		'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
    	];

        if($data['password'] != null){
            $d['password_raw'] = $data['password'];
            $d['password'] = Hash::make($data['password']);
        }

    	return $user->where('id', $user->id)->update($d);
    }

}
