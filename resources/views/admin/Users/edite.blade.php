@extends('layout.admin.master')
@section('form')
    <div class="pl-5 offset-lg-2">
    <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title font-weight-bold">Edite User</h4>
    <form class="forms-sample" action="{{route('user.update',$user->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputUsername1 font-weight-bold">Username</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputUsername1" placeholder="Enter Your Username">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1 font-weight-bold">Email address</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1 font-weight-bold">Phone</label>
            <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary mr-2">Update</button>
        <button class="btn btn-light">Dismis</button>
    </form>
        </div>
    </div>
    </div>
    </div>
@endsection
