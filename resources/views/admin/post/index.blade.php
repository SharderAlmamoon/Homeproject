@extends('layout.admin.master')
@section('form')
    <div class="text-right mb-4">
        <a class="text-decoration-none font-weight-bold" href="{{route('dashboard')}}">Dashboard /</a><a class="text-decoration-none font-weight-bold" href="{{route('post.create')}}">Create Category</a>
        @include('layout.admin._message')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$serial++}}
                                    </td>
                                    <td>
                                        <img src="{{asset($post->image)}}" alt="">
                                    </td>
                                    <td>
                                        {{$post->status}}
                                    </td>
                                    <td>
                                        {{($post->is_featured == 1)?"YES":"NO"}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}">Edit</a>
                                        <a class="btn btn-info" href="{{route('post.show',$post->id)}}">Show</a>
                                        <form class="d-inline-block" action="{{route('post.destroy',$post->id)}}" method="post">
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
                                   Picture
                                </th>
                                 <th>
                                    Status
                                </th>
                                <th>
                                    Is_Featured
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{$posts->render()}}
 @endsection

