@extends('dashboard.layout')

@section('content')
    @if(count($posts) > 0)
        <table class="table table-stripped">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Modified At</th>
                <th>Options</th>
            </tr>
            @foreach($posts as $post)
                <tr data-id="{{$post->id}}">
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:150px;height:150px;"></td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="/offer/{{$post->id}}/edit" class="btn btn-primary btn-md">Edit</a>
                        <a href="/offer/{{$post->id}}" class="btn btn-danger btn-md delete-offer">Delete</a>
                    
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <h1>No offers available</h1>
    @endif
@endsection
