<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        $notification = array(
            'message' => 'Category Successfully Add',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }

    public function edit($id)
    {
        $edit_category = Category::findorfail($id);
        return view('admin.category.edit', compact('edit_category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
        
        $update_category = Category::findorfail($id);
        $update_category->category_name = $request->category_name;
        $update_category->save();
        $notification = array(
            'message' => 'Category Successfully Update',
            'alert-type' => 'success',
        );

        return redirect()->route('categories')->with($notification);
    }

    public function destroy($id)
    {
        $deletecat = Category::findorfail($id);
        $deletecat->delete();
        $notification = array(
            'message' => 'Category Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
