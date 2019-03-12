<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('website.news.index',compact('posts'));
    }

    public function details($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $categories = Category::latest()->paginate(5);
        $popularPost = Post::where('approved',true)->orderBy('view_count', 'desc')->take(4)->get();
        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }

        return view('post_detail',compact('post','categories','popularPost'));
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->where('approved',true)->paginate(6);
        return view('postsByCategory',compact('category','posts'));
    }
}
