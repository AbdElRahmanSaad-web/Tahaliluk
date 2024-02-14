<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('Dashboard.user.index', compact('users'));
    }

    public function create(){
        return view('Dashboard.user.create');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' =>Hash::make($request->password)
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User is Created Successfully');
    }

    public function show($id){
        $user = User::find($id);
        
        return view('Dashboard.user.show', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);

        return view('Dashboard.user.update', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User is Updated Successfully');
    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User is Deleted Successfully');
    }
}
