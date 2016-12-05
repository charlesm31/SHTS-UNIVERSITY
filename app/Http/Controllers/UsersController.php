<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getUsers()
    {
        $users = User::get()->all();
        return view('user.lists', compact('users'));
    }

    public function storeUser()
    {
        return view('user.form');
    }

    public function postUser($id)
    {
        return view('user.update');
    }

    public function destroyUser(Request $request)
    {
        $id = $request['user_id'];
        
        //add here if user is authenticated and admin

        $user = USER::find($id);


        if($id != '1' || $id !='2'){
            $user->delete();
        }

        return redirect('/users');
    }
}
