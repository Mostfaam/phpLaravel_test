<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classification extends Controller
{
    function index()
    {
        $categories = \App\Models\Classification::query()->get();
        return view("admin.category.index", compact("categories"));
    }

    function create()
    {
        return view('admin.category.create');

    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required' | 'image',
            'description' => 'required|string'
        ]);
        if ($request->file('imgs'))
            $name = $request->file('imgs')->store("category");


        \App\Models\Classification::query()->create([
                "name" => $request->name,
                "image" => 'storage/' . $name,
                'description' => $request->description,
            ]
        );
        return redirect()->route('admin.classification.create');
    }

    function edit($id)
    {
        $category = \App\Models\Classification::query()->findOrFail($id);
        return view("admin.category.edit", compact("category"));
    }

    function update($id, Request $request)
    {  $this->validate($request,[
        'imgs'=>'nullable|image',
        'name'=>'required'|"string",
        'description'=>'required'|'string'
    ]);
        if ($request->file('imgs'))
            $name = $request->file('imgs')->store("category");
        else $name = \App\Models\Classification::query()->find($id)->image;

        \App\Models\Classification::query()->where("id", $id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => 'storage/' . $name
            ]
        );
        return redirect()->route("admin.classification.index");
    }

    function destroy($id)
    {
        \App\Models\Classification::query()->where("id", $id)->delete();
        return redirect()->route("admin.classification.index");
    }
}
