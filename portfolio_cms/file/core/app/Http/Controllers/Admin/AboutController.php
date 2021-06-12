<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use App\Funfact;
use App\Setting;
use Session;

class AboutController extends Controller
{
    public function about_me(){
        $about = About::findOrFail(1);
       return view('admin.about.about-me', compact('about'));
    }

    // Update About Content
    public function update_about_me(Request $request){
      

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'residence' => 'required',
            'freelance' => 'required',
            'about_title' => 'required',
            'about_text' => 'required',
            'position_type' => 'required',
            'resume' => 'mimes:pdf',
        ]);
        
        $aboutme = About::first();

       if($request->hasFile('avatar')){
           @unlink('assets/front/img/'. $aboutme->avatar);

           $file = $request->file('avatar');
           $extension = $file->getClientOriginalExtension();
           $avatar = 'avatar_'.time().rand().'.'.$extension;
           $file->move('assets/front/img/', $avatar);

           $aboutme->avatar = $avatar;
       }

       if($request->hasFile('profile_image')){
           @unlink('assets/front/img/'. $aboutme->profile_image);

           $file = $request->file('profile_image');
           $extension = $file->getClientOriginalExtension();
           $profile_image = 'profile_image_'.time().rand().'.'.$extension;
           $file->move('assets/front/img/', $profile_image);

           $aboutme->profile_image = $profile_image;
       }

       if($request->hasFile('resume')){
           @unlink('assets/front/file/'. $aboutme->resume);

           $file = $request->file('resume');
           $extension = $file->getClientOriginalExtension();
           $resume = 'resume_'.time().rand().'.'.$extension;
           $file->move('assets/front/file/', $resume);

           $aboutme->resume = $resume;
       }

       $aboutme->name = $request->name;
       $aboutme->age = $request->age;
       $aboutme->residence = $request->residence;
       $aboutme->freelance = $request->freelance;
       $aboutme->about_title = $request->about_title;
       $aboutme->about_text = $request->about_text;
       $aboutme->position_type = $request->position_type;

       $aboutme->save();

       Session::flash('success', 'About Updated successfully!');
       return redirect()->route('admin.about_me');
    }


    // Update Contact Info
    public function contact_info(){
        $about = About::findOrFail(1);
       return view('admin.about.contact-info', compact('about'));
    }
    public function contact_info_update(Request $request){
       

        $request->validate([
            'address' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'map' => 'required'
        ]);

       

        $setting = Setting::first();
        $setting->map = $request->map;
        $setting->save();

        $contact_info = About::first();
        $contact_info->address = $request->address;
        $contact_info->mail = $request->mail;
        $contact_info->phone = $request->phone;
        $contact_info->latitude = $request->latitude;
        $contact_info->longitude = $request->longitude;

        $contact_info->save();

        Session::flash('success', 'Contact Info Updated successfully!');
        return redirect()->route('admin.contact_info');
    }







    // Fun fact List
    public function funfact(){
        $funfacts = Funfact::all();
       return view('admin.about.funfact.index', compact('funfacts'));
    }


    // Add Fun fact 
    public function funfact_add(){
       return view('admin.about.funfact.add');
    }


     // Fun fact Store
    public function funfact_store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'value' => 'required',
        ]);

        $funfact = new Funfact();

        if($request->hasFile('icon')){
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);

            $funfact->icon = $icon;
            
        }

        
        $funfact->name = $request->name;
        $funfact->value = $request->value;
        $funfact->save();

        Session::flash('success', ' Fun Fact Added successfully!');
        return redirect()->route('admin.funfact');

    }
    public function funfact_delete($id){
       
        $funfact = Funfact::findOrFail($id);
        $funfact->delete();

        Session::flash('success', ' Fun Fact Deleted successfully!');
        return redirect()->route('admin.funfact');
    }
    public function funfact_edit($id){

        $funfact = Funfact::findOrFail($id);
        return view('admin.about.funfact.edit', compact('funfact'));
    }

    public function funfact_update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $funfact = Funfact::findOrFail($id);

        if($request->hasFile('icon')){
            @unlink('assets/front/img/'. $funfact->icon);

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);

            $funfact->icon = $icon;
            
        }

        $funfact->name = $request->name;
        $funfact->value = $request->value;

        $funfact->save();

        Session::flash('success', ' Fun Fact Update successfully!');
        return redirect()->route('admin.funfact');
    }
}
