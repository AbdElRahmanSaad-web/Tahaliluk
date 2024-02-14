<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::all();

        return view('Dashboard.Admin.index', compact('admins'));
    }

    public function create(){
        return View('Dashboard.Admin.create');
    }

    public function store(Request $request){
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => 'admin',
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Admin Is Created Successfully');
    }


    public function show($id){  
        $admin = Admin::find($id);

        return view('Dashboard.Admin.show', compact('admin'));
    }

    public function edit($id){
        $admin = Admin::find($id);

        return view('Dashboard.Admin.update', compact('admin'));
    }

    public function update(Request $request, $id){
        $admin = Admin::find($id);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Admin is Updated Successfully');
    }

    
    public function destroy($id){
        $user = Admin::find($id);

        $user->delete();

        return redirect()->route('admin.admins.index')->with('success', 'Admin is Deleted Successfully');
    }
}
