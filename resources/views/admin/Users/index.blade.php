@extends('layout.admin.master')
@section('form')
    <div class="text-right mb-4">
        <a class="text-decoration-none font-weight-bold" href="{{route('dashboard')}}">Dashboard /</a><a class="text-decoration-none font-weight-bold" href="{{route('user.create')}}">Create User</a>
     @include('layout.admin._message')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Table</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                              {{$user->id}}
                            </td>
                            <td>
                              {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('user.edit',$user->id)}}">Edit</a>
                                <a class="btn btn-info" href="">Show</a>
                                <form class="d-inline-block" action="{{route('user.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Are You Sure Want To Delete')">Delete</button>
                                </form>

                            </td>
                        </tr>
                            @endforeach

                        </tbody>
                        <thead>
                        <tr>
                            <th>
                               Serial
                            </th>
                            <th>
                                User Name
                            </th>
                            <th>
                               Email
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
