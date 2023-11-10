<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletter = Newsletter::all();
        return view('admin.newsletter.newsletter', compact('newsletter'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:newsletters|max:255',
        ]);

        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        $notification = array(
            'message' => 'Thanks for Subscription',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }

    public function destroy($id)
    {
        $newsletter = Newsletter::findorfail($id);
        $newsletter->delete();
        $notification = array(
            'message' => 'Email Successfully Delete',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


}
