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
        return view('home', compact('request'));
    }

    public function blog(Request $request, $slug)
    {
        try {
            $posts = Posts::join('category_post', 'posts.cat_id', '=', 'category_post.id')
                ->where('category_post.cat_name', $slug)
                ->get();
            // $posts = Posts::latest()->take(10)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
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

        return view('Frontend.gallery', compact('gallery', 'request'));
    }

    public function members(Request $request, $slug)
    {
        try {
            $members = Posts::join('category_post', 'posts.cat_id', '=', 'category_post.id')
                ->where('category_post.cat_name', $slug)
                ->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }



        return view('Frontend.members', compact('request', 'members'));
    }
}
