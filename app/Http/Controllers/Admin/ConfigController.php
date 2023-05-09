<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Config;
use App\Models\Status;
use App\Models\Position;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request)
    {

        try {
            $data = Config::all();
            $status = Status::all();
            $position = Position::all();
            if(count($status)==0) return redirect()->back()->with('fail', 'Please add status');
            if(count($position)==0) return redirect()->back()->with('fail', 'Please add position');
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Impossible to implement');
        }

        return view('Admin.pages.Config.index', compact('request', 'data', 'status', 'position'));
    }

    public function create(Request $request)
    {

        $rules = [
            'name' => 'required|unique:config|max:255',
            'url' => 'required|max:255',
            'link' => 'required|max:255',

        ];
        $message = [
            'name.required' => 'Please enter a name',
            'name.unique' => 'name already exists',
            'url.required' => 'Please enter a url',
            'link.required' => 'Please enter link',
            'link.max' => 'link must be less than 255 characters',
        ];
        $request->validate($rules, $message);
        try {
            Config::create($request->all());
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Impossible to implement');
        }

        
        return redirect(url('admin/config'))->with('success', 'config create successfully');
    }

    public function delete( $id)
    {
        try {
            $config = Config::findOrFail($id);

            $config->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Impossible to implement');
        }


        return redirect(url('admin/config'))->with('success', 'config delete successfully');
    }

    public function edit(Request $request, $id)
    {

       try {
            $status = Status::all();
            $config = Config::findOrFail($id);
            $position = Position::all();
            $data = Config::all();

       } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Impossible to implement');
       }

        return view('Admin.pages.Config.Update', compact('request', 'data', 'status', 'config', 'position'));
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'url' => 'required|max:255',
            'link' => 'required|max:255',

        ];
        $message = [
            'url.required' => 'Please enter a url',
            'link_pro.required' => 'Please enter link_pro',
            'link_pro.max' => 'link_pro must be less than 255 characters',
        ];
        $request->validate($rules, $message);

        try {
            $newSlide = $request->all();

            $slide = Config::findOrFail($id);

            $slide->update($newSlide);
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'Impossible to implement');
        }

        return redirect(url('admin/config'))->with('success', 'config update successfully');
    }
}
