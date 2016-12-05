@extends('layout.admin')

@section('title')
User Lists
@endsection

@section('header')
User Lists
@endsection

@section('page')
User Lists
@endsection

@section('content')
<p>List of all users from the database </p>
<table class="table table-resposive table-hover">
    <thead>
      <tr>
        <th>User</th>
        <th>Created</th>
        <th>Status</th>
        <th><a href="{{ url('/user/new') }}"><i class="fa fa-plus"></i> New</a></th>
      </tr>
    </thead>
    <tbody>

      @foreach($users as $user)
      <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->created_at }}</td>
        <td><span class="label label-success">Active</span></td>
        <td>
          <button class="btn btn-xs btn-primary" id="user_update" data-id="{{ $user->id }}"><i class="fa fa-pencil"></i> </button>
          <button class="btn btn-xs btn-danger"  id="user_delete" data-id="{{ $user->id }}"><i class="fa fa-trash-o"></i> </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection