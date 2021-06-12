<?php

namespace App\Http\Controllers\Admin;

use App\Classes\GeniusMailer;
use App\EmailTemplate;
use App\Emailsetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $templates = EmailTemplate::orderBy('id','desc')->get();
        return view('admin.email.index',compact('templates'));
    }

    public function config()
    {
        $emailsetting = Emailsetting::all()->first();
        return view('admin.email.config', compact('emailsetting'));
    }

    public function configUpdate(Request $request)
    {
        $request->validate([
            'smtp_host' => 'required',
            'smtp_port' => 'required',
            'smtp_user' => 'required',
            'smtp_pass' => 'required',
            'from_email' => 'required',
            'from_name' => 'required',
        ]);

        $settings = Emailsetting::all();
        foreach($settings as $setting){
            $setting->update([
                'is_smtp' =>  $request->is_smtp,
                'header_email' =>  $request->header_email,
                'smtp_host' =>  $request->smtp_host,
                'smtp_port' =>  $request->smtp_port,
                'email_encryption' =>  $request->email_encryption,
                'smtp_user' =>  $request->smtp_user,
                'smtp_pass' =>  $request->smtp_pass,
                'from_email' =>  $request->from_email,
                'from_name' =>  $request->from_name,
            ]);
        }

        $notification = array(
            'messege' => 'Email Configuration Updated Successfully',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

}