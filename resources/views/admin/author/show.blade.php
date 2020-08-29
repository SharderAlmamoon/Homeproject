@extends('layout.admin.master')
@section('form')
    <div class="container">
        <div class="row">
            <div class="col-md-3 img-responsive mt-5">
                <img class="rounded-circle" src="{{asset($author->image)}}" alt="Blank" width="100%">
            </div>
            <div class="col-md-6 ">
                <table class="table table-bordered">
                    <tr>
                        <th class="font-italic display-4 text-success" colspan="2">{{$author->name}}</th>
                    </tr>
                    <tr>
                       <td>Email</td>
                       <td>{{$author->email}}</td>
                    </tr>
                    <tr>
                       <td>Phone</td>
                       <td>{{$author->phone}}</td>
                    </tr>
                    <tr>
                       <td>Address</td>
                       <td>{{$author->address}}</td>
                    </tr>
                    <tr>
                       <td>Status</td>
                       <td>{{$author->status}}</td>
                    </tr>
                    <tr>
                       <td>Total-Post</td>
                       <td>{{$author->total_post}}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>


@endsection
