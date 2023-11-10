<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    public function UserRole()
    {
        $user = Admin::where('type', 2)->get();
        return view('admin.role.all_role', compact('user'));
    }

    public function UserCreate()
    {
        return view('admin.role.create_role');
    }

    public function UserStore(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['category'] = $request->category;
        $data['coupon'] = $request->coupon;
        $data['product'] = $request->product;
        $data['blog'] = $request->blog;
        $data['order'] = $request->order;
        $data['other'] = $request->other;
        $data['report'] = $request->report;
        $data['role'] = $request->role;
        $data['retuen'] = $request->retuen;
        $data['contact'] = $request->contact;
        $data['comment'] = $request->comment;
        $data['setting'] = $request->setting;
        $data['stock'] = $request->stock;
        $data['type'] = 2;

        Admin::insert($data);
        $notification = array(
            'message' => 'Child Admin Add Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function Userdelete($id)
    {
        Admin::where('id', $id)->delete();
        $notification = array(
            'message' => 'Child Admin delete Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function Useredit($id)
    {
        $user = Admin::where('id', $id)->first();

        return view('admin.role.edit_role', compact('user'));
    }

    public function UserUpdate(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['category'] = $request->category;
        $data['coupon'] = $request->coupon;
        $data['product'] = $request->product;
        $data['blog'] = $request->blog;
        $data['order'] = $request->order;
        $data['other'] = $request->other;
        $data['report'] = $request->report;
        $data['role'] = $request->role;
        $data['retuen'] = $request->retuen;
        $data['contact'] = $request->contact;
        $data['comment'] = $request->comment;
        $data['setting'] = $request->setting;
        $data['stock'] = $request->stock;

        Admin::where('id', $id)->update($data);
        $notification = array(
            'message' => 'Child Admin Update Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.all.user')->with($notification);
    }

}
