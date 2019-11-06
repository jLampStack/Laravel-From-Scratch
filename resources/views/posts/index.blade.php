@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
    <h1>Posts</h1>
    {{$posts->links()}}
      @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="card p-3 mb-3">
            <div class="card-body">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                  </div>
                  <div class="col-md-8 col-sm-8">
                    <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Posted by {{$post->user->name}} on {{$post->created_at}}</small>
                  </div>
                </div>
            </div>
          </div>
        @endforeach
      @else
        <p>No posts found</p>
      @endif
      {{$posts->links()}}
  </div>
@endsection