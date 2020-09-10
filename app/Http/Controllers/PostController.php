<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="All Post Here";
        $data['posts'] = Post::orderBy('id','DESC')->paginate(3);
        $data['serial']=ManagepaginationSerial($data['posts']);
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Create a New Post";
        $data['categories'] = Category::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $data['authors'] = Author::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        return view('admin.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'author_id' => 'required',
            'title' => 'required',
            'details' => 'required',
            'status' => 'required',
            'image' => 'mimes:jpeg,jpg,png,pdf,ai,psd|max:10000',
        ]);
        $data=$request->all();
        if ($request->hasFile('image')){
            $data['image'] = $this->fileupload($request->image);
        }
        Post::create($data);
        session()->flash('message','Post Created DOne');
        return redirect()->route('post.index');
    }


//    ETAH Image upload er jonno alternative function

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    private function fileupload($image){
        $path='images/Posts';
        $file_name =time().rand(00000,99999).'.'.$image->getClientOriginalExtension();
        $image->move($path,$file_name);
        $fulpath=$path.'/'.$file_name;
        return $fulpath;
    }



    public function show($id)
    {
       $data['title'] = 'All post Show';
       $data['post']=Post::with('category','author')->findOrFail($id);
       return view('admin.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['title']="Edit Post";
        $data['categories'] = Category::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $data['authors'] = Author::where('status','Active')->orderBy('name','ASC')->pluck('name','id');
        $data['post'] = $post;
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required',
            'author_id' => 'required',
            'status' => 'required',
            'title' => 'required',
            'details' => 'required',
            'image' => 'mimes:jpeg,jpg,png,pdf,ai,psd,',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image']=$this->fileupload($request->image);
            if ($post->image && file_exists($post->image)){
                unlink($post->image);
            }
        }
       if(!$request->has('is_featured')){
           $data['is_featured']=0;
       }
      $post->update($data);
        session()->flash('message','Post Updated Success');
        return redirect()->route('post.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       if($post->image && file_exists($post->image)){
           unlink($post->image);
       }
       $post->delete();
       session()->flash('message','HEY! AUthor HasBeen Deleted');
       return redirect()->route('post.index');
    }
}
