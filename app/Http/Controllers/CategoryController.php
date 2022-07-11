<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {


        $data =[
            "title" => "All Post",
            'active'=>'posts',
            'category'=>Category::all(),
        ];
        return view('admin.pages.category.index',$data);
    }
 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data =[
            "name" => $request->name, 
        ];

        Category::create($data);
        return back()->with('success','Category has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =[
            "name" => $request->name, 
        ];

        Category::where('id', $id)->update($data);
        return back()->with('success','Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::where('category_id', $id)->first();
        if($data){
            return back()->with('gagal','ada post yang terkait dengan category ini');
        }
        Category::where('id', $id)->delete();
        return back()->with('success','Category has been deleted');

    }
}