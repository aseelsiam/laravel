@extends('dashboard.layout')

@section('content')
    <h1>Create An Offer</h1>
    {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Offer Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Offer Description')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Description', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'Cover Image')}}
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}
    {!!Form::close()!!}
@endsection
