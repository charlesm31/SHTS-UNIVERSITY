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

    public function storeUser(Request $request)
    {

        if ($request->isMethod('post')) {
            $user = new User;
            $user->type = $request['type'];
            $user->username = $request['username'];
            $user->password = bcrypt($request['password']);
            $user->save();

            return redirect('/users');
        }        

        return view('user.form');
    }

    public function postUser(Request $request, $id)
    {
        $user = User::find($id);

        return view('user.form', compact('user'));

        if ($request->isMethod('post')) {
            dd($user);
            $user->type = $request['type'];
            $user->username = $request['username'];
            dd($request['password']);
            if(!empty($request['password'])){
                $user->password = bcrypt($request['password']);
            }

            $user->update();

            return redirect('/users');
        }      
    }

    public function destroyUser(Request $request)
    {
        $id = $request['user_id'];
        
        //add here if user is authenticated and admin

        $user = User::find($id);

        if($id != '1' || $id !='2'){
            $user->delete();
        }

        return redirect('/users');
    }
}
