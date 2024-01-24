<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::orderBy('id','DESC')->get();
        return view('admin.role.index', compact('data'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);
        Role::updateOrCreate(
            [
                'id'=>$request->id
            ],[
                'name'=>$request->name,
            ]
        );
        if($request->id){
            $msg = 'Role updated successfully.';
        }else{
            $msg = 'Role created successfully.';
        }
        return redirect()->route('admin.role.index')->with('success',$msg);
    }

    public function edit($id)
    {
        $data = Role::where('id',decrypt($id))->first();
        return view('admin.role.edit',compact('data'));
    }

    public function destroy($id)
    {
        Role::where('id',decrypt($id))->delete();
        return redirect()->route('admin.role.index')->with('error','Role deleted successfully.');
    }
}
