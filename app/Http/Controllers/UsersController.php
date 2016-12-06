<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{

    /**
    * Authenticate user using Auth Facade
    *
    **/
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request['username'];
            $password = $request['password'];

            if (Auth::attempt(array('username' => $username, 'password' => $password))){
                return redirect('/users');
            }else { 
                $msg = 'Invalid credentials';
                $class= 'alert-danger';
                return view('welcome', compact('msg', 'class', 'username'));
            }
        }    

        return view('welcome');
    }


    /**
    * Logout and destroy session data
    *
    **/
    public function logout(Request $request) {
          Auth::logout();
          return redirect('/');
    }


    /**
    * Get User Lists
    **/
    public function getUsers()
    {
        $users = User::get()->all();
        return view('user.lists', compact('users'));
    }


    /**
    * Create or Update User
    **/
    public function storeUser(Request $request)
    {
        if(Auth::user()->type === 'admin'){
            if ($request->isMethod('post')) {

                $this->validate($request, [
                    'username' => 'required|unique:users|max:255',
                    'password' => 'required|min:8',
                    'type' => 'required',
                ]);

                $user = new User;
                $user->type = $request['type'];
                $user->username = $request['username'];
                $user->password = bcrypt($request['password']);
                $user->remember_token = '';
                $user->save();

                return redirect('/users');
            }    
            return view('user.form');
        }      
        return redirect('/users');
    }


    /**
    * Get single User and Update
    *
    **/
    public function postUser(Request $request, $id)
    {
        $user = User::find($id);

        if(Auth::user()->type === 'admin'){   
            if ($request->isMethod('post')) {

                $user->type = $request['type'];
                $user->username = $request['username'];
                if(!empty($request['password'])){
                    $user->password = bcrypt($request['password']);
                }
                $user->update();
                return redirect('/users');
            }                              
            return view('user.form', compact('user'));         
        }
        return redirect('/users');       
    }

    
    /**
    * Delete Existing User
    *
    **/
    public function destroyUser(Request $request)
    {
        if(Auth::user()->type === 'admin'){
            
            $id = $request['user_id'];    
            $user = User::find($id);

            if($id != '1' || $id !='2'){
                $user->delete();
            }
        }
        return redirect('/users');     
    }
}