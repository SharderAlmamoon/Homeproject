@extends('layout.admin.master')
@section('form')
    <div class="pl-5 offset-lg-2">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">Edite User</h4>
                    <form class="forms-sample" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('admin.post._form')
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Dismis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection