<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\User;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog'] = Blog::orderBy('title', 'asc')->get();
        return view('blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;

        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->author = $request->input('author');
        $blog->user_id = $request->input('userId');
        $blog->category= $request->input('category');
        $blog->save();

       return redirect('blogs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
       $data['singleBlog'] = Blog::find($id);
       $data['comments'] = Comment::where('blog_id','=', $id)->get();
       $uId = Blog::select('user_id')->where('id','=', $id)->get();
       $userId = $uId[0]->user_id;
       $data['userEmail']=User::findOrFail($userId);
       return view('blog.blogDetail', $data, compact('id'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllUserBlogs($id)
    {
        return Blog::find($id)->userBlogs;
    }
    public function filter(Request $request)
    {   
        $data['blog'] = Blog::where('category', '=', $request->input('category'))->get();
        return view('blog.index', $data);
    }
}
