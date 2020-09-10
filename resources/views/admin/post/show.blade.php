@extends('layout.admin.master')
@section('form')
    <table cellpadding="10">
        <tr>
          <td>{{$post->category->name}} </td>
        </tr>

        <tr>
            <td colspan="4"><img src="{{asset($post->image)}}" alt=""></td>
        </tr>
        <tr>
          <td> {{$post->total_read}} / {{$post->is_featured==1?'YES':'NO'}} / {{$post->status}} / {{$post->created_at}}</td>

        </tr>
        <tr>
            <td class="font-weight-bold display-5" colspan="4">{{$post->title}}</td>
        </tr>
        <tr>
            <td class="text-justify" colspan="4">{{$post->details}}</td>
        </tr>
        <tr>
            <td class="font-weight-bold">{{$post->author->name}}</td>
        </tr>

    </table>
@endsection
