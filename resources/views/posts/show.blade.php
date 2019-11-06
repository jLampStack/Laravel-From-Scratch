@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
    <a href="/posts" class="btn btn-primary btn-sm mt-3 mb-3">Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:25%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <BR><BR>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
    <small>Written by {{$post->user->name}} on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
      @endif
    @endif
  </div>
@endsection