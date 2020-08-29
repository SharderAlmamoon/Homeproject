<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['title']='ALL AUTHOR LIST';
         $data['authors']=Author::paginate(3);
         $data['serial']=ManagepaginationSerial($data['authors']);
         return view('admin.author.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Create a new author';
        return view('admin.author.create',$data);
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
           'name'=> 'required',
           'email'=> 'required|email|unique:authors',
           'phone'=> 'required|unique:authors',
           'status'=> 'required',
       ]);
       $data=$request->all();
       if ($request->image){
           $image=$request->image;
           $path='images/authors';
           $image->move($path,$image->getClientOriginalName());
           $fullpath=$path.'/'.$image->getClientOriginalName();
           $data['image']=$fullpath;
       }
        Author::create($data);
        session()->flash('message','Authors Created Successfully');
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
       $data['title']= "Author Edited";
       $data['author']=$author;
       return view('admin.author.edite',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:authors,email,'.$author->id,
            'phone'=> 'required|unique:authors,phone,'.$author->id,
            'status'=> 'required',
        ]);
        $data=$request->all();
        if ($request->image){
        $image=$request->image;
        $path='images/authors';
        $image->move($path,$image->getClientOriginalName());
        $fulpath=$path.'/'.$image->getClientOriginalName();
        $data['image']=$fulpath;
        }
         $author->update($data);
        session()->flash('message','Authors Updated Successfully');
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
       $author->delete();
       session()->flash('message','Author Deleted Successfully');
       return redirect()->route('author.index');
    }
}
