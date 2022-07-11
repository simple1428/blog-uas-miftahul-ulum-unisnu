<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class  PostController extends Controller
{ 
    public function index()
    {
        $data = [
            "title" => "Post",
            "post" => Post::all()
        ];
        return view('admin.pages.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "title" => "create",
            "category" => Category::all()
        ];
        return view('admin.pages.post.create',$data);
    }
 
    public function store(Request $request)
    { 
        $validatedData =  $request->validate([
            "title" => "required|max:255",
            "slug" => "unique:posts",
            "category_id" => "required",
            "image" => 'image|file|max:1024',
            "body" => "required",
        ]);
        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($validatedData['title'],'-');
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),200);

        Post::create($validatedData);

        return redirect('/admin/post')->with('success','New post has been added!');
    }
 
    public function show(Post $post)
    {
        $data = [
            "title" => "Detail",
            "post" => $post
        ];
        return view('admin.pages.post.lihat ',$data);
    }
 
    public function edit(Post $post)
    {
        $data = [
            "title" => "update",
            "category" => Category::all(),
            'post' => $post
        ];

        return view('admin.pages.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    { 
        $rules = [
            "title" => "required|max:255", 
            "category_id" => "required",
            "body" => "required",
        ] ;

        if($request->slug != $post->slug)
        {
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData =  $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($validatedData['title'],'-'); 
        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::where('id', $post->id)
        ->update($validatedData);

        return redirect('/admin/post')->with('success','Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/admin/post')->with('success','Post has been deleted!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}