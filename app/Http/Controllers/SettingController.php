<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function SiteSetting()
    {
        $setting = SiteSetting::first();
        return view('admin.sitesetting.sitesetting', compact('setting'));
    }

    public function UpdateSiteSetting(Request $request)
    {
        $id = $request->id;
        $data = array();
        $data['phone_one'] = $request->phone_one;
        $data['phone_two'] = $request->phone_two;
        $data['email'] = $request->email;
        $data['company_name'] = $request->company_name;
        $data['company_address'] = $request->company_address;
        $data['company_info'] = $request->company_info;
        $data['company_info'] = $request->company_info;
        $data['facebook'] = $request->facebook;
        $data['youtube'] = $request->youtube;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        SiteSetting::where('id', $id)->update($data);
        $notification = array(
            'message' => 'Site Setting Update Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

}
