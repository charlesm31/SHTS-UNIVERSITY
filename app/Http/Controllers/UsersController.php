<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request['username'];
            $password = $request['password'];

            if (Auth::attempt(array('username' => $username, 'password' => $password))){
                return redirect('/users');
            }
            else { 
                $msg = 'Invalid credentials';
                $class= 'alert-danger';
                return view('welcome', compact('msg', 'class'));
            }
        }    

        return redirect('/');
    }

    public function logout(Request $request) {
          Auth::logout();
          return redirect('/');
    }

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