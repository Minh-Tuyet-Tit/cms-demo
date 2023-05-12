<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Posts;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request){
        return view('home', compact('request'));
    }

    public function blog(Request $request){
        try {
            $posts = Posts::latest()->take(10)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }

        return view('Frontend.Blog', compact('posts', 'request'));
    }

    public function blog_detail(Request $request,$id){
        try {
            $post = Posts::findOrFail($id);
            $posts = Posts::latest()->take(5)->get();
        } catch (\Throwable $th) {
            return redirect()->back();
        }

        return view('Frontend.Blog-detail', compact('post','request','posts'));
    }
}
