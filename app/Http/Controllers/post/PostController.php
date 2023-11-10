<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {
        $postcat = PostCategory::all();
        return view('admin.post.create', compact('postcat'));
    }

    public function store(Request $request)
    {

        //image upload and resize by Intervention Package

        if ($request->file('post_image')) {
            $image = $request->file('post_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1024, 1024)->save('upload/post_images/' . $name_gen);
            $save_url = 'upload/post_images/' . $name_gen;
        }

        Post::insert([
            'post_title_en' => $request->post_title_en,
            'post_title_in' => $request->post_title_in,
            'category_id' => $request->category_id,
            'details_en' => $request->details_en,
            'details_in' => $request->details_in,
            'post_image' => $save_url,
        ]);
        $notification = array(
            'messege' => 'Post Successfully Inserted',
            'alert-type' => 'success',
        );
        return Redirect()->route('all.post')->with($notification);
    }

    public function edit($id)
    {
        $edit_post = Post::findorfail($id);
        return view('admin.post.edit', compact('edit_post'));
    }

    public function show($id)
    {
        $show = Post::findorfail($id);

        return view('admin.post.show', compact('show'));
    }

    public function destroy($id)
    {
        $post_delete = Post::findorfail($id);
        unlink($post_delete->post_image);
        $post_delete->delete();
        $notification = array(
            'message' => 'Post Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function UpdatepostWithoutPhoto(Request $request, $id)
    {

        Post::find($id)->update([
            'post_title_en' => $request->post_title_en,
            'post_title_in' => $request->post_title_in,
            'category_id' => $request->category_id,
            'details_en' => $request->details_en,
            'details_in' => $request->details_in,
        ]);

        $notification = array(
            'messege' => 'Post Successfully Updated',
            'alert-type' => 'success',
        );
        return Redirect()->route('all.post')->with($notification);
    }

    public function UpdatepostPhoto(Request $request, $id)
    {

        $old_one = $request->old_one;

        $post_image = $request->file('post_image');

        if ($post_image) {

            unlink($old_one);
            $image = $request->file('post_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1024, 1024)->save('upload/post_images/' . $name_gen);
            $save_url = 'upload/post_images/' . $name_gen;

            Post::find($id)->update([
                'post_image' => $save_url,
            ]);

            $notification = array(
                'messege' => 'Post Image Updated Successfully',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.post')->with($notification);
        }
    }
}
