<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brand.brand', compact('brand'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'brand_name' => 'required|unique:brands|max:55',
            'brand_logo' => 'required | mimes:jpeg,jpg,png,PNG | max:2000',
        ]);

        $image = $request->file('brand_logo');
        $image_name = hexdec(uniqid());
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'upload/brand_images/';
        $image_url = $upload_path . $image_full_name;
        $image->move($upload_path, $image_full_name);

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_logo' => $image_url,
        ]);
        $notification = array(
            'messege' => 'Brand Inserted Successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit_brand = Brand::find($id);
        return view('admin.brand.edit', compact('edit_brand'));
    }

    public function destroy($id)
    {
        $brand_delete = Brand::find($id);
        unlink($brand_delete->brand_logo);
        $brand_delete->delete();
        $notification = array(
            'messege' => 'Brand Deleted Successfully',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'brand_name' => 'required|unique:brands|max:55',
        ]);

        $old_logo = $request->old_logo;
        $image = $request->file('brand_logo');

        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/brand_images/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            unlink($old_logo);

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_logo' => $image_url,
            ]);

            $notification = array(
                'messege' => 'Brand Update Successfully',
                'alert-type' => 'success',
            );
            return Redirect()->route('brand')->with($notification);

        } else {

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
            ]);

            $notification = array(
                'messege' => 'Brand Update Successfully',
                'alert-type' => 'success',
            );

            return Redirect()->route('brand')->with($notification);
        }
    }
}
