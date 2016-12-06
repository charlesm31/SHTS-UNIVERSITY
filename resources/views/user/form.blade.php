@extends('layout.admin')

@section('title')
New User
@endsection

@section('header')
User Form
@endsection

@section('page')
User Form
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <form class="well" id="form_user" method="post" action="{{ url('/user/new') }}">
            <div class="form-group">
                <label>Type:</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="user"  {{ (!empty($user) && $user['type'] == 'admin') ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ (!empty($user) && $user['type'] == 'admin') ? 'selected' : '' }}>Admin</option>                  
                </select>
            </div>

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" value="{{ (!empty($user->username) ? $user->username : '') }}" placeholder="*username" required>
            </div>

            <div class="form-group">
                <label>{{ (!empty($user->password) ? 'New Password' : 'Password') }}:</label>
                <input type="password" name="new_password" class="form-control"  placeholder="*New password" {{ (empty($user) ? 'required' : '') }}>
            </div>

                   
           
            {{ csrf_field() }}
            
            @if(empty($user))
                <button type="submit" class="btn btn-success">Add</button>
            @else
                <button type="submit" class="btn btn-primary">Edit</button>
            @endif

            <a href="{{ url('/user/new') }}" class="btn btn-default">Refresh</a>
        </form>
    </div>    
</div>
@endsection
