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
          <a href="{{ url('/user/update') }}" class="btn btn-xs btn-primary" id="{{ $user->id }}"><i class="fa fa-pencil"></i> </a>
          <button class="btn btn-xs btn-danger delete_user"  data-id="{{ $user->id }}" data-toggle="modal"  data-target="#confirm-delete"><i class="fa fa-trash-o"></i> </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @include('modals.delete')
@endsection

@section('script')
<script>
  $(document).on("click", ".delete_user", function () {
      var user_id = $(this).data('id');
      $("#confirm-delete #user_id").val( user_id );
  });
</script>
@endsection