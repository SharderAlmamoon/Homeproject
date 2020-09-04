@extends('layout.admin.master')
@section('form')
    <div class="text-right">
        <a class="text-decoration-none font-weight-bold" href="{{route('dashboard')}}">Dashboard /</a><a class="text-decoration-none font-weight-bold" href="{{route('post.index')}}">All Post</a>
    </div>
    <div class="pl-5 offset-lg-2">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">Create New User</h4>
                    <form class="forms-sample" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('admin.post._form')
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

