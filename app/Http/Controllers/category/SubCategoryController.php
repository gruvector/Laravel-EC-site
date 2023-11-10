<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Category;

class SubCategoryController extends Controller
{
    public function index()
    {
        $category= Category::all();
        $subcat = SubCategory::ALL();

        return view('admin.subcategory.subcategory', compact('category','subcat'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
        ]);

        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
        ]);

        $notification = array(
            'message' => 'Sub Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$edit_cat = Category::all();
    	$subcat = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit',compact('edit_cat','subcat'));
    }

    public function destroy($id)
    {
        $subcat_delete = Subcategory::find($id);
        $subcat_delete->delete();

        $notification = array(
            'messege' => 'Sub Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'subcategory_name' => 'required',
        ]);

        Subcategory::find($id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
        ]);

        $notification = array(
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('subcategory')->with($notification);
    }
}
