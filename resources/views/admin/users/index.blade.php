@extends('layout')

@section('title', 'Admin panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($users as $user)
                            <li class="list-group-item">
                                <strong>User ID: </strong>{{$user->id}}
                                <br>
                                <strong>Name: </strong>{{$user->name}}
                                <br>
                                <strong>Email: </strong>{{$user->email}}
                                <br>
                                <strong>Roles: </strong>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}
                                <br>
                                <a href="{{route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </li>

                        @endforeach
                     </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
