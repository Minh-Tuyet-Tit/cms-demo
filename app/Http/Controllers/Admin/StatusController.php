<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Status;

class StatusController extends Controller
{
    public function index(Request $request)
    {

        $data = Status::all();
        return view('Admin.pages.Status.index', compact('data', 'request'));
    }

    public  function add(Request $request)
    {
        $rules = [
            'status_name' => 'required|unique:status|max:100',
        ];
        $message = [
            'status_name.required' => 'Please enter a status name',
            'status_name.unique' => 'Status name already exists',
        ];
        $request->validate($rules, $message);


        $newStatus = $request->all();
        Status::create($newStatus);


        return redirect('/admin/status')->with('success', 'Status create successfully');;
    }

    public function delete($id)
    {


        try {
            $status = Status::findOrFail($id);
            if ($status->checkDelete($id)) return redirect()->back()->with('fail', 'This status cannot be deleted');
            $status->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail', 'This status cannot be deleted');
        }
        return redirect('/admin/status')->with('success', 'Status delete successfully');;
    }


    public function edit(Request $request, $id)
    {
        $status = Status::findOrFail($id);
        $data = Status::all();
        return view('Admin.pages.Status.Update', compact('status', 'data', 'request'));
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'status_name' => 'required|max:100',
        ];
        $message = [
            'status_name.required' => 'Please enter a status name',
        ];
        $request->validate($rules, $message);

        $dataForm = $request->all();
        $status = Status::findOrFail($id);

        $status->update($dataForm);

        return redirect('/admin/status')->with('success', 'Status update successfully');
    }
}
