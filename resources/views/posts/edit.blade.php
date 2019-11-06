@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
      <h1>{{Auth::user()->name}}</h1>
      <h3>Edit Post</h3>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text', 'rows' => '10'])}}
      </div>
      <div class="form-group">
        {{Form::file('cover_image')}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    <BR>
    <h5>Attachments:</h5>
    <img style="width:25%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
  </div>
  
@endsection