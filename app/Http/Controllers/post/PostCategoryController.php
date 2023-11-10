<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class PostCategoryController extends Controller
{
    public function index()
    {
        $postcat = PostCategory::all();
        return view('admin.post.category.index', compact('postcat'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name_en' => 'required|unique:post_categories|max:255',
            'category_name_in' => 'required|unique:post_categories|max:255',
        ]);

        $postcat = new PostCategory();
        $postcat->category_name_en = $request->category_name_en;
        $postcat->category_name_in = $request->category_name_in;
        $postcat->save();
        $notification = array(
            'message' => 'Post Category Successfully Add',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit_postcat = PostCategory::findorfail($id);
        return view('admin.post.category.edit', compact('edit_postcat'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name_en' => 'required|unique:post_categories|max:255',
            'category_name_in' => 'required|unique:post_categories|max:255',
        ]);
        
        $update_postcat = PostCategory::findorfail($id);
        $update_postcat->category_name_en = $request->category_name_en;
        $update_postcat->category_name_in = $request->category_name_in;
        $update_postcat->save();
        $notification = array(
            'message' => 'Category Successfully Update',
            'alert-type' => 'success',
        );

        return redirect()->route('all.post.category')->with($notification);
    }

    public function destroy($id)
    {
        $delete_postcat = PostCategory::findorfail($id);
        $delete_postcat->delete();
        $notification = array(
            'message' => 'Category Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
