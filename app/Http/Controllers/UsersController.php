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

    public function postUser()
    {
        return view('user.add');
    }

    public function destroyUser()
    {
        return view('user.delete');
    }
}
