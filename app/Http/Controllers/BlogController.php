<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();


        return view('blogs.blog-home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        if ($blog == null) {
            abort(404);
        }
        return view('blogs.blog-post', ['blog' => $blog]);
    }

    public function writeblog()
    {
        return view('blogs.writeblog');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->imgUrl = $request->imgUrl;
        $blog->tags = $request->tags;
        $blog->author = auth()->user()->name;
        $blog->user_id = auth()->user()->id;
        $blog->date = Carbon::now()->toDateString();


        $blog->save();
        return redirect('/blog/' . $blog->id);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog == null) {
            abort(404);
        }
        $blog->delete();
        return redirect('/blog');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        if ($blog == null) {
            abort(404);
        }
        return view('blogs.editblog', ['blog' => $blog]);
    }

    public function makeEdit(Request $request, $id)
    {
        $blog = Blog::find($id);
        if ($blog == null) {
            abort(404);
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->imgUrl = $request->imgUrl;
        $blog->tags = $request->tags;
        $blog->author = auth()->user()->name;
        $blog->user_id = auth()->user()->id;
        $blog->date = Carbon::now()->toDateString();

        $blog->save();
        return redirect('/blog/' . $blog->id);
    }
}
