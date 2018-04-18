@extends('layouts.master')
@section('contents')
  <div class="main-content paddsection">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-1">
          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="/storage/cover_images/{{$post->coverimage}}" style="height:500px; width:100%;" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h4><a href="#">{{$post->name}}</a></h4>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="author">by:<a href="#">{{$post->user->username}}</a></li>
                        <li class="date">date:<a href="#">{{$post->created_at}}</a></li>
                        @if(count($post->comments) <= 1)
                        <li class="commont"><i class="ion-ios-heart-outline"></i><a href="#">{{count($post->comments)}} Comment</a></li>
                        @else
                         <li class="commont"><i class="ion-ios-heart-outline"></i><a href="#">{{count($post->comments)}} Comments</a></li>
                        @endif
                      </ul>
                    </div>
                    <p class="mb-30">{!!$post->body!!}</p>
                  </div>
                </div>
              </div>
               
                @if (Route::has('login'))
                                 @auth
               <div class="container">
                <div class="form-group">
              
                      <textarea id="commentable" placeholder="Enter Comment" class="form-control" style="resize:vertical;" name="body" spellcheck="false" autosize-target></textarea>
                </div>
                 <div class="form_group">
                        <button class="btn btn-dark" style="margin-bottom:5px;" onclick="comment({{$post->id}});">Comment</button>
                  </div> 
               </div>
               @endauth
               @endif
                

               @if(count($comments) > 0)
               <h4 style="padding:5px;">Recent Comments</h4>
               @foreach($comments as $comment)
              <div class="col-md-12">
                <div class="comments text-left padDiv mb-30">
                  <div class="entry-comments">
                    <ul class="entry-comments-list list-unstyled">
                      <li>
                        <div class="entry-comments-item">
                          <img src="/storage/cover_images/{{$comment->user->avatar}}" class="entry-comments-avatar" alt="">
                          <div class="entry-comments-body">
                            <span class="entry-comments-author">{{$comment->user->username}}</span>
                            <span><a href="#">{{$comment->created_at}}</a></span>
                              <p>{!!$comment->body!!}</p>
                            {{--    REPLY  --}}
                         
                            @if(count($replies)>0)
                                  @foreach($replies as $reply)
                                    <div class="entry-comments-item">
                                     <img src="/storage/cover_images/{{$reply->user->avatar}}" class="entry-comments-avatar" alt="">
                                     <div class="entry-comments-body">
                                         <span class="entry-comments-author">{{$reply->user->username}}</span>
                                               <span><a href="#">replied at {{$reply->created_at}}</a></span>
                                              <p>{{$reply->body}}</p>
                                      </div>
                                    </div>
                                       
                                 @endforeach
                            @endif
                            
                              {{--  END REPLY  --}}
                              @if (Route::has('login'))
                                 @auth
                              <button style="margin-bottom:5px;" id="id{{$comment->id}}" onclick="displayReply({{$comment->id}});">Reply</button>

                              <div style="display:none;" id="{{$comment->id}}">
                                    <div class="form-group">
                                        <textarea id="body{{$comment->id}}" placeholder="Enter Reply" class="form-control" style="resize:vertical;" name="body" spellcheck="false" autosize-target text-left></textarea>
                                    </div>
                                    
                                    <div class="form_group">
                                       <button style="margin-bottom:5px;" onclick="sendReply({{$comment->id}});">Send</button>
                                       <button style="margin-bottom:5px;" onclick="abort({{$comment->id}});">Abort</button>
                                    </div>
                              </div>
                              @endauth
                          @endif
                          </div>
                        </div>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
              <div class="col-md-3">
                <div class="card">
                <div class="card card-header alpha">Action</div>
                <div class="card card-body">
                    <ul class="list-group">
                      <li  class="list-group-item text-light"><a href="/posts">All Posts</a></li>
                       @if (Route::has('login'))
                          @auth
                            @if(Auth::user()->role_id != 3)
                      <li  class="list-group-item text-light"><a href="/posts/create">Create Post</a></li>
                      <li  class="list-group-item text-light"><a href="/posts/{{$post->id}}/edit">Edit Post</a></li>
                      <li class="list-group-item text-light">
                        <a href="#" onclick="
                            var result = confirm('Are you sure you wish to delete this Post?');
                            if(result){
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }"  style="padding:5px;">Delete
                        </a>
                            <form action="{{ route('posts.destroy',[$post->id]) }}" method="POST" id="delete-form" style="display:none;">
                                @method('delete')
                                @csrf
                            </form>
                      </li>
                      @endif
                       @endauth
                     @endif
                    </ul>
                  </div>
                </div>
              </div>
      </div>
    </div>
  </div>
@endsection
