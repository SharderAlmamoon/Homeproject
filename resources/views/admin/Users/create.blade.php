@extends('layout.admin.master')
@section('form')
    <div class="text-right">
    <a class="text-decoration-none font-weight-bold" href="{{route('dashboard')}}">Dashboard /</a><a class="text-decoration-none font-weight-bold" href="{{route('user.index')}}">All User</a>
    </div>
    <div class="pl-5 offset-lg-2">
    <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title font-weight-bold">Create New User</h4>
    <form class="forms-sample" action="{{route('user.store')}}" method="post">
        @csrf
        @include('admin.Users._form')
        <div class="form-group">
            <label for="exampleInputPassword1 font-weight-bold">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1 font-weight-bold">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </form>
        </div>
    </div>
    </div>
    </div>
@endsection
