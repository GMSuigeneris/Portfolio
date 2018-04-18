@extends('layouts.master')
@section('contents')
<div class="container-fluid" style="margin-top:15px;">
    <div class="row">
        <div class="col-md-9 col-lg-9 mx-auto">
            <div class="card">
                <div class="card card-header text-light" style="background-color:#000;">Create new Post</div>
                <div class="card card-body">
                     <div class="col-sm-12 " style="padding:10px; margin:5px;">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                <label for="name" style="background-color:#000; color:#fff; padding:5px;">Title<span class="required">*</span></label>
                                <input placeholder="Enter Name" class="form-control" required id="name" name="name" spellcheck="false">
                            </div>

                            <div class="form-group">
                                <label for="content" style="background-color:#000; color:#fff; padding:5px;">Body</label>
                                <textarea placeholder="Enter Description" class="form-control" style="resize:vertical;" rows="5"  id="article-ckeditor" name="body" spellcheck="true" autosize-target text-left></textarea>
                            </div>

                             <div class="form-group">
                                <label for="Upload" style="background-color:#000; color:#fff; padding:5px;">Upload Image</label>
                                    <input id="Upload" type="file" class="form-control" name="coverimage">
                             </div>

                            <div class="form_group">
                                <input type="submit" class="btn btn-primary" value="Post"/>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-md-2">
                <div class="card">
                <div class="card card-header" style="background:#b22222; color:#fff;">Action</div>
                <div class="card card-body">
                    <ul style="list-style:none;" class="list-group">
                      <li  class="list-group-item text-light"><a href="/posts">All Posts</a></li>
                    </ul>
                  </div>
                </div>
              </div>
    </div>
</div>
@endsection