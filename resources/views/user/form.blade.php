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
        <form class="well" id="form_user" method="post" action="{{ (!empty($user->id) ? url(Request::path()) : url('/user/add')) }}">
       
            <div class="form-group">
                <label>Type:</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="user"  {{ (!empty($user) && $user['type'] == 'admin') ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ (!empty($user) && $user['type'] == 'admin') ? 'selected' : '' }}>Admin</option>                  
                </select>
            </div>

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" value="{{ (!empty($user->username) ? $user->username : old('username')) }}" placeholder="*username" required>
            </div>

            <div class="form-group">
                <label>{{ (!empty($user->password) ? 'New Password' : 'Password') }}:</label>
                <input type="password" name="password" class="form-control"  placeholder="*New password" {{ (empty($user) ? 'required' : '') }}>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif                  
           
            {{ csrf_field() }}
            
            @if(empty($user))
                <button type="submit" name="add" class="btn btn-success">Add</button>
            @else
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
            @endif

            <a href="{{ url('/users') }}" class="btn btn-default">Cancel</a>
        </form>
    </div>    
</div>
@endsection
