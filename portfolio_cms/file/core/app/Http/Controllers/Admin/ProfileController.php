<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Session;
use Hash;
use Validator;
use Auth;

class ProfileController extends Controller
{
    public function editProfile(){
        return view('admin.profile.editprofile');
    }

    // Update Admin Profile
    public function updateProfile(Request $request){
        
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'position' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        $adminprofile = Admin::first();
            
        if($request->hasFile('image')){
           @unlink('assets/front/img/'. $adminprofile->image);
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $image = 'adminProfile_'.time().rand().'.'.$extension;
           $file->move('assets/front/img/', $image);
           $adminprofile->image = $image;
       }

       $adminprofile->username = $request->username;
       $adminprofile->email = $request->email;
       $adminprofile->first_name = $request->first_name;
       $adminprofile->last_name = $request->last_name;
       $adminprofile->position = $request->position;
       $adminprofile->save();

       Session::flash('success', 'Admin Profile Updated successfully!');
       return redirect()->route('admin.editProfile');
    }

    // Edit Admin Password
    public function editPassword(){
        return view('admin.profile.changepass');
    }

    public function updatePassword(Request $request) {
        $messages = [
            'password.required' => 'The new password field is required',
            'password.confirmed' => "Password does'nt match"
        ];
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ], $messages);
        // if given old password matches with the password of this authenticated user...
        if(Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
            $oldPassMatch = 'matched';
        } else {
            $oldPassMatch = 'not_matched';
        }
        if ($validator->fails() || $oldPassMatch=='not_matched') {
            if($oldPassMatch == 'not_matched') {
              $validator->errors()->add('oldPassMatch', true);
            }
            return redirect()->route('admin.editPassword')
                        ->withErrors($validator);
        }
  
        // updating password in database...
        $user = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
  
        Session::flash('success', 'Password changed successfully!');
  
        return redirect()->back();
      }
}
