<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Posts;
use App\Models\Status;
use App\Models\CategoryPost;



class PostsController extends Controller
{
    public function index(Request $request)
    {

        $data =
            Posts::latest()->take(10)->get();
        $status = Status::all();
        $category = CategoryPost::all();


        return view('Admin.pages.Posts.index', compact('request', 'data', 'status', 'category'));
    }



    public function add(Request $request)
    {
        $data =
            $posts = Posts::latest()->take(10)->get();
        $status = Status::all();
        $category = CategoryPost::all();

        return view('Admin.pages.Posts.Add', compact('request', 'data', 'status', 'category'));
    }

    public function create(Request $request)
    {

        $rules = [
            'post_title' => 'required|unique:posts|max:255',
            'summary' => 'required',
            'image' => 'required',
            'description' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',

        ];
        $message = [
            'post_title.required' => 'Please enter a name product',
            'post_title.unique' => 'name already exists',
            'summary.required' => 'Please enter summary',
            'description.required' => 'Please enter description',
            'meta_keyword.required' => 'Please enter meta_keyword',
            'meta_description.required' => 'Please enter meta_description',
            'image.required' => 'Please add image',

        ];
        $request->validate($rules, $message);

        try {
            Posts::create($request->all());
        } catch (\Throwable $th) {
            
            return redirect()->back()->with('fail', 'Posts created fail');
        }




        return redirect(url('admin/post'))->with('success', 'Posts created successfully');
    }

    public function delete(Request $request, $id)
    {
        $post = Posts::findOrFail($id);

        $post->delete();
        return redirect(url('admin/post'))->with('success', 'Posts delete successfully');
    }

    public function edit(Request $request, $id)
    {

        try {
            $status = Status::all();
            $post = Posts::findOrFail($id);
            $category = CategoryPost::all();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Error');
        }
        return view('Admin.pages.Posts.Update', compact('request', 'status', 'post', 'category'));
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'post_title' => 'required|max:255',
            'summary' => 'required',
            'description' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',

        ];
        $message = [
            'post_title.required' => 'Please enter a name product',
            'summary.required' => 'Please enter summary',
            'description.required' => 'Please enter description',
            'meta_keyword.required' => 'Please enter meta_keyword',
            'meta_description.required' => 'Please enter meta_description',

        ];
        $request->validate($rules, $message);

        try {
            $post = Posts::findOrFail($id);
            $post->update($request->all());
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Posts update fail');
        }

        return redirect(url('admin/post'))->with('success', 'Posts update successfully');
    }
}
