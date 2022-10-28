<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\category;

class CategoryController extends Controller
{

    public function select($slug)
    {
        $cat = category::where('slug',$slug)->first();
        return view('admin.category.update-category', compact('cat'));
    }

    public function index()
    {
        $categories = category::orderBy('id', 'DESC')->get();
        return view('admin.category.category', compact('categories'));
    }

    public function create(Request $request)
    {
        $category = new category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        //Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/img/category-img/', $name); 
        $category->image = $name;
        $category->save();

        return redirect('/category')->with('success', 'Category added successfully!');
    }

    public function update(Request $request, $slug)
    {
        //Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/img/category-img/', $name);

        category::where('slug',$slug)->update([
            "name" => $request->name,
            "slug" => Str::slug($request->name),
            "image" => $name
        ]);

        return redirect('/category');
    }


}
