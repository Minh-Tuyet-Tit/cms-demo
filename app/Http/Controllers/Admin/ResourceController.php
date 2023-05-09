<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileType;
use Illuminate\Http\Request;

use App\Models\Resource;

use App\Models\Status;

use App\Models\Posts;


class ResourceController extends Controller
{
    public function index(Request $request)
    {

        try {
            $data = Resource::all();
            $status = Status::all();
            $post = Posts::all();
            $fileType = FileType::all();

            if (count($status) == 0) return redirect()->back()->with('fail', 'Please add status');
            if (count($post) == 0) return redirect()->back()->with('fail', 'Please add post');
            if (count($fileType) == 0) return redirect()->back()->with('fail', 'Please add fileType');
        } catch (\Throwable $th) {
            return
                redirect()->back()->with('fail', 'Impossible to implement');
        }



        return view('Admin.pages.Resource.index', compact('request', 'data', 'status', 'post', 'fileType'));
    }

    public function create(Request $request)
    {

        $rules = [
            'url' => 'required|unique:resource|max:255',
        ];
        $message = [
            'url.required' => 'Please enter a url',
            'url.unique' => 'url already exists',
        ];
        $request->validate($rules, $message);

        try {
            Resource::create($request->all());
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'resource create fail');
        }
        return redirect(url('admin/resource'))->with('success', 'resource create successfully');
    }

    public function delete( $id)
    {
        try {
            $resource = Resource::findOrFail($id);
            $resource->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'resource delete fail');
        }


        return redirect(url('admin/resource'))->with('success', 'resource delete successfully');
    }

    public function edit(Request $request, $id)
    {

        $status = Status::all();
        $resource = Resource::findOrFail($id);
        $post = Posts::all();
        $data = Resource::all();
        $fileType = FileType::all();

        return view('Admin.pages.Resource.Update', compact('request', 'data', 'status', 'resource', 'post', 'fileType'));
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'url' => 'required|max:255',

        ];
        $message = [
            'url.required' => 'Please enter a url',
        ];
        $request->validate($rules, $message);



        $resource = Resource::findOrFail($id);

        $resource->update($request->all());

        return redirect(url('admin/resource'))->with('success', 'resource update successfully');
    }
}
