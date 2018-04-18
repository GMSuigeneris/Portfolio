@extends('layouts.master')
@section('contents')
<div class="container">
  <div class="row paddsection">
    <div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
    <h6>Posts</h6>
    @if(count($posts)>0)
       @foreach($posts as $post)
          <div class="card" style="margin:10px;">
            <div class="card card-header bio">{{$post->name}}</div>
            <div class="card card-body">
              <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                  <img src="storage/cover_images/{{$post->coverimage}}" style="height:200px; width:200px;" alt="User image" id="image">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4"></div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                   Posted on {{$post->created_at}}<br><br>
                   Written by {{$post->user->username}}<br><br>
                   <a href="/posts/{{$post->id}}" style="color:#b22222;">Read...</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
           {{$posts->links()}}
    @else
      <p>No post has been made</p>
    @endif
      @if (Route::has('login'))
         @auth
         @if(Auth::user()->role_id != 3)
           <a href="/posts/create"><button class="btn alpha" style="margin-bottom:200px;">New Post</button></a>
           @endif
         @endauth
    @endif
    </div>
  </div>
</div>
@endsection