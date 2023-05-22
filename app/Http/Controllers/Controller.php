<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\ImageGalery;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        try {
            $category = CategoryPost::where('cat_name', 'Posts')->first();
            
            $posts = Posts::where('cat_id', $category->id)->take(10)->get();

            $category_m = CategoryPost::where('cat_name', 'Members')->first();
            $members = Posts::where('cat_id', $category_m->id)->get();
            // dd($posts);
        } catch (\Throwable $th) {
            
        }
        return view('home', compact('request', 'posts', 'members'));
    }

    public function blog(Request $request)
    {
        try {

            $category = CategoryPost::where('cat_name', 'Posts')->first();
            $posts = Posts::where('cat_id', $category->id)->get();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'không lấy đc post');
        }

        return view('Frontend.Blog', compact('posts', 'request'));
    }

    public function blog_detail(Request $request, $id)
    {
        try {
            $post = Posts::findOrFail($id);
            $posts = Posts::latest()->take(5)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }

        return view('Frontend.Blog-detail', compact('post', 'request', 'posts'));
    }
    public function gallery(Request $request)
    {
        try {
            $gallery = ImageGalery::latest()->take(10)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }

        return view('Frontend.Gallery', compact('request'));
    }

    public function members(Request $request)
    {
        try {
            $category = CategoryPost::where('cat_name', 'Members')->first();
            $members = Posts::where('cat_id', $category->id)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }



        return view('Frontend.Members', compact('request', 'members'));
    }
    public function about(Request $request)
    {

        return view('Frontend.About', compact('request'));
    }
}
