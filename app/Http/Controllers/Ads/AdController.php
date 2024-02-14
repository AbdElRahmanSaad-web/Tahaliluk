<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index(){
        $ads = Ad::get();

        return View('Dashboard.Ads.index', compact('ads'));
    }

    public function create(){
        return view('Dashboard.Ads.create');
    }

    public function store(Request $request){
        Ad::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $request->image_url,
            'status' => isset($request->status)?'active':'inactive'
        ]);

        return redirect()->route('admin.ads.index')->with('success', 'Ad is Created Successfully');
    }

    public function show($id){
        $ad = Ad::find($id);

        return view('Dashboard.Ads.show', compact('ad'));
    }

    public function edit($id){
        $ad = Ad::find($id);

        return view('Dashboard.Ads.update', compact('ad'));
    }

    public function update(Request $request, $id){
        $ad = Ad::find($id);

        $ad->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => isset($request->image_url)?$request->image_url:$ad->image_url,
            'status' => isset($request->status)?'active':'inactive'
        ]);

        return redirect()->route('admin.ads.index')->with('success', 'Ad is Updated Successfully');
    }

    public function destroy($id){
        $ad = Ad::find($id);

        $ad->delete();

        return redirect()->route('admin.ads.index')->with('success', 'Ad is Deleted Successfully');
    }
}
