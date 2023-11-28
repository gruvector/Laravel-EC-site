<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Models\Product;
use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.all', compact('product'));
    }

    public function ec_intro(Request $request)
    {
        $type = $request->input('before3_btn_input');
        if(!$type || $type == "すべて"){
            $product = Product::all();
        } else{
            $product = Product::where('product_color', $type)->get();
            // dd($product);
        }
        return view('pages.EC_introduction', compact('product'));
    }

    public function sales(Request $request) {
        $sales = Product::all();
        return view('pages.sales', compact('sales'));
    }

    public function client_voice1()
    {
        $product = Product::all();
        return view('pages.clients_voice1', compact('product'));
    }
    
    public function cart_ec($id) {
        $free_test = Product::where('id', $id)->get()->first();
        $test = $free_test;
        return view('pages.cart', compact('test'));
    }

    public function admin_table() {
        $product = Product::all();
        $order = Order::all();
        $shipping = Shipping::all();
        return view('pages.dashboard', compact('product','order','shipping'));
    }

    public function storeData(Request $request) {

    }




















    public function create()
    {
        $category = Category::all();
        $subcat = Subcategory::all();
        $brand = Brand::all();
        return view('admin.product.create', compact('category', 'subcat', 'brand'));
    }
    
    public function store(Request $request)
    {

        // $image = $request->file('image_one');
        // $image_name = hexdec(uniqid());
        // $ext = strtolower($image->getClientOriginalExtension());
        // $image_full_name = $image_name . '.' . $ext;
        // $upload_path = 'upload/product_images/';
        // $image_url = $upload_path . $image_full_name;
        // $image->move($upload_path, $image_full_name);

        //image upload and resize by Intervention Package

        if ($request->file('image_one')) {
            $image = $request->file('image_one');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1024, 1024)->save('upload/product_images/' . $name_gen);
            $save_url = 'upload/product_images/' . $name_gen;
        }

        if ($request->file('image_two')) {
            $image2 = $request->file('image_two');
            $name_gen2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(1024, 1024)->save('upload/product_images/' . $name_gen2);
            $save_url2 = 'upload/product_images/' . $name_gen2;
        }

        if ($request->file('image_three')) {
            $image3 = $request->file('image_three');
            $name_gen3 = hexdec(uniqid()) . '.' . $image3->getClientOriginalExtension();
            Image::make($image3)->resize(1024, 1024)->save('upload/product_images/' . $name_gen3);
            $save_url3 = 'upload/product_images/' . $name_gen3;
        }

        // $image2 = $request->file('image_two');
        // $image_name2 = hexdec(uniqid());
        // $ext = strtolower($image2->getClientOriginalExtension());
        // $image_full_name2 = $image_name2 . '.' . $ext;
        // $upload_path2 = 'upload/product_images/';
        // $image_url2 = $upload_path2 . $image_full_name2;
        // $image2->move($upload_path2, $image_full_name2);

        // $image3 = $request->file('image_three');
        // $image_name3 = hexdec(uniqid());
        // $ext = strtolower($image3->getClientOriginalExtension());
        // $image_full_name2 = $image_name3 . '.' . $ext;
        // $upload_path3 = 'upload/product_images/';
        // $image_url3 = $upload_path3 . $image_full_name3;
        // $image3->move($upload_path3, $image_full_name3);

        // $data = new Product();
        // $data->product_name = $request->product_name;
        // $data->product_code = $request->product_code;
        // $data->product_quantity = $request->product_quantity;
        // $data->category_id = $request->category_id;
        // $data->subcategory_id = $request->subcategory_id;
        // $data->brand_id = $request->brand_id;
        // $data->product_size = $request->product_size;
        // $data->product_color = $request->product_color;
        // $data->selling_price = $request->selling_price;
        // $data->product_details = $request->product_details;
        // $data->video_link = $request->video_link;
        // $data->main_slider = $request->main_slider;
        // $data->hot_deal = $request->hot_deal;
        // $data->best_rated = $request->best_rated;
        // $data->trend = $request->trend;
        // $data->mid_slider = $request->mid_slider;
        // $data->hot_new = $request->hot_new;
        // $data->status = 1;
        // $data->save();

        Product::insert([
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_quantity' => $request->product_quantity,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'product_details' => $request->product_details,
            'video_link' => $request->video_link,
            'main_slider' => $request->main_slider,
            'product_details' => $request->product_details,
            'hot_deal' => $request->hot_deal,
            'best_rated' => $request->best_rated,
            'trend' => $request->trend,
            'mid_slider' => $request->mid_slider,
            'hot_new' => $request->hot_new,
            'buyone_getone' => $request->buyone_getone,
            'status' => 1,
            'image_one' => $save_url,
            'image_two' => $save_url2,
            'image_three' => $save_url3,
        ]);
        $notification = array(
            'messege' => 'Product Successfully Inserted',
            'alert-type' => 'success',
        );
        return Redirect()->route('all.product')->with($notification);
    }

    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function show($id)
    {
        $show = Product::findorfail($id);

        return view('admin.product.show', compact('show'));
    }

    public function destroy($id)
    {
        $data = Product::findorfail($id);
        unlink($data->image_one);
        unlink($data->image_two);
        unlink($data->image_three);
        $data->delete();
        $notification = array(
            'message' => 'Product Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        $data = Product::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Successfully Active',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function inactive($id)
    {
        $data = Product::where('id', $id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Successfully Inactive',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function UpdateProductWithoutPhoto(Request $request, $id)
    {

        Product::find($id)->update([
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_quantity' => $request->product_quantity,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'product_details' => $request->product_details,
            'video_link' => $request->video_link,
            'main_slider' => $request->main_slider,
            'product_details' => $request->product_details,
            'hot_deal' => $request->hot_deal,
            'best_rated' => $request->best_rated,
            'trend' => $request->trend,
            'mid_slider' => $request->mid_slider,
            'hot_new' => $request->hot_new,
            'buyone_getone' => $request->buyone_getone,
        ]);

        $notification = array(
            'messege' => 'Product Successfully Updated',
            'alert-type' => 'success',
        );
        return Redirect()->route('all.product')->with($notification);
    }

    public function UpdateProductPhoto(Request $request, $id)
    {

        $old_one = $request->old_one;
        $old_two = $request->old_two;
        $old_three = $request->old_three;

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');

        if ($image_one) {

            unlink($old_one);
            $image = $request->file('image_one');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1024, 1024)->save('upload/product_images/' . $name_gen);
            $save_url = 'upload/product_images/' . $name_gen;

            Product::find($id)->update([
                'image_one' => $save_url,
            ]);

            $notification = array(
                'messege' => 'Image One Updated Successfully',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.product')->with($notification);
        }

        if ($image_two) {

            unlink($old_two);
            $image2 = $request->file('image_two');
            $name_gen2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(1024, 1024)->save('upload/product_images/' . $name_gen2);
            $save_url2 = 'upload/product_images/' . $name_gen2;

            Product::find($id)->update([
                'image_two' => $save_url2,
            ]);

            $notification = array(
                'messege' => 'Image Two Updated Successfully',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.product')->with($notification);

        }

        if ($image_three) {

            unlink($old_three);
            $image3 = $request->file('image_three');
            $name_gen3 = hexdec(uniqid()) . '.' . $image3->getClientOriginalExtension();
            Image::make($image3)->resize(1024, 1024)->save('upload/product_images/' . $name_gen3);
            $save_url3 = 'upload/product_images/' . $name_gen3;

            Product::find($id)->update([
                'image_three' => $save_url3,
            ]);

            $notification = array(
                'messege' => 'Image Three Updated Successfully',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.product')->with($notification);
        }
    }

    public function productsview($id)
    {
        $product = Product::where('subcategory_id', $id)->paginate();
        $category = Category::all();
        $brands = Product::where('subcategory_id', $id)->select('brand_id')->groupBy('brand_id')->get();
        return view('pages.all_products', compact('product', 'category', 'brands'));
    }

    public function allcategory($id){
        $all_category = Product::where('category_id', $id)->paginate();
        return view('pages.all_category', compact('all_category'));
    }

}
