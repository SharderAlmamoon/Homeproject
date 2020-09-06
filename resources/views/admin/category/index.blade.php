@extends('layout.admin.master')
@section('form')
    <div class="text-right mb-4">
        <a class="text-decoration-none font-weight-bold" href="{{route('dashboard')}}">Dashboard /</a><a class="text-decoration-none font-weight-bold" href="{{route('category.create')}}">Create Category</a>
     @include('layout.admin._message')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Table</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>
                              {{$serial++}}
                            </td>
                            <td>
                              {{$category->name}}
                            </td>
                            <td>
                              {{$category->status}}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('category.edit',$category->id)}}">Edit</a>
                                <a class="btn btn-info" href="">Show</a>
                                <form class="d-inline-block" action="{{route('category.destroy',$category->id)}}" method="post">
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
                                Category Name
                            </th>
                            <th>
                               Status
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{$categories->render()}}
@endsection
