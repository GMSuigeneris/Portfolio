
<div class="container">

    <div class="row" style="padding:5px;">
        <div class=" col-sm-10 col-md-10 col-lg-10">
            <div class="card">
                <div class="card card-header bio">Comment</div>
                <div class="card card-body">
                    <form action="{{ route('comments.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{$post->id}}" name="post_id">
                            <div class="form-group">
                                <textarea placeholder="Enter Comment" class="form-control" style="resize:vertical; height:190px;"  id="article-ckeditor" name="body" spellcheck="false" autosize-target text-left></textarea>
                            </div>
                            
                            <div class="form_group">
                                <input type="submit" class="btn alpha" value="Comment"/>
                            </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

