<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['coverimage']){
            $fileNameWithExt = $request['coverimage']->getClientOriginalName();
            //File name without ext
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Extension
            $extension = $request['coverimage']->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request['coverimage']->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore ="noimage.jpg";
        }
                $post = Post:: create([
                    'name'=>$request->input('name'),
                    'body'=>$request->input('body'),
                    'coverimage'=>$fileNameToStore,
                    'user_id'=>$request->user()->id
                ]);
                if($post){
                    return redirect()->route('posts.show',['post'=>$post])
                    ->with('success','Post created successfully');
                }
        return back()->withInput()->with('errors','Error occured, Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorFail($id);
        $replies= null;
        if(count($post->comments)==0){
            $comments = null;
        }else{
            $comments = $post->comments->sortByDesc('created_at')->take(5);
           
                foreach ($comments as $comment) {
                        $replies = $comment->replies->sortByDesc('created_at')->take(5);
                }
               
        }
       
        
        return view('posts.show',['post'=>$post,'comments'=>$comments,'replies'=>$replies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorFail($id);
        return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request['coverimage']){
            $fileNameWithExt = $request['coverimage']->getClientOriginalName();
            //File name without ext
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Extension
            $extension = $request['coverimage']->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request['coverimage']->storeAs('public/cover_images',$fileNameToStore);
        }
         //save data
         if($request->hasFile('coverimage')){
            $post = Post::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                'body'=>$request->input('body'),
                'coverimage'=>$fileNameToStore
            ]);
         }else{
            $post = Post::where('id',$id)
            ->update([
                'name'=>$request->input('name'),
                'body'=>$request->input('body')
            ]); 
         }
 
         if($post){
             return redirect()->route('posts.show',['post'=>$id])
             ->with('success','Post updated successfully');
         }
         //redirect
         return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post ::find($id);

        if($post->delete()){
            return redirect()->route('posts.index')
            ->with('success','Post deleted successfully');
        }
        //redirect
        return back()->withInput()->with('error','Post could not be deleted');
    }
}
