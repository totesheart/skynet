<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Session;
use Validator;
use Auth;

class SettingController extends Controller
{
    public function basicinfo(){
       return view('admin.settings.basicinfo'); 
    }

    ///Update Basic Info
    public function updateBasicinfo(Request $request){
         $request->validate([
            'website_title' => 'required',
            'base_color' => 'required',
            'header_logo' => 'mimes:jpeg,jpg,png',
            'fav_icon' => 'mimes:jpeg,jpg,png',
            'breadcrumb_image' => 'mimes:jpeg,jpg,png',
         ]);

         $basicsettings = Setting::first();
            
         if($request->hasFile('header_logo')){
            @unlink('assets/front/img/'. $basicsettings->header_logo);
            $file = $request->file('header_logo');
            $extension = $file->getClientOriginalExtension();
            $header_logo = 'header_logo_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $header_logo);
            $basicsettings->header_logo = $header_logo;
        }
        
         if($request->hasFile('fav_icon')){
            @unlink('assets/front/img/'. $basicsettings->fav_icon);
            $file = $request->file('fav_icon');
            $extension = $file->getClientOriginalExtension();
            $fav_icon = 'fav_icon_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/', $fav_icon);
            $basicsettings->fav_icon = $fav_icon;
        }

         if($request->hasFile('breadcrumb_image')){
            @unlink('assets/front/img/'. $basicsettings->breadcrumb_image);

            $file = $request->file('breadcrumb_image');
            $file->move('assets/front/img/', 'breadcrumb_image.jpg');
        }

        
	   if($request->is_dark == 'on'){
         $basicsettings->is_dark = 1;
	   }else{
         $basicsettings->is_dark = 0;
      }
      
	   if($request->iswow == 'on'){
         $basicsettings->iswow = 1;
	   }else{
         $basicsettings->iswow = 0;
	   }

        $basicsettings->website_title = $request->website_title;
        $basicsettings->contact_mail = $request->contact_mail;

        $color = preg_replace('/#/i', '', $request->base_color);
        $basicsettings->base_color = $color;

        $basicsettings->save();

        Session::flash('success', 'Basic Setting Updated successfully!');
        return redirect()->route('admin.basicinfo');
    }

    // Update Section Title
    public function sectiontitle(){
       return view('admin.settings.sectiontitle');
    }
    public function updateSectiontitle(Request $request){
      
       $request->validate([
         'about_title' => 'required|max:150',
         'education_title' => 'required|max:150',
         'experince_title' => 'required|max:150',
         'service_title' => 'required|max:150',
         'portfolio_title' => 'required|max:150',
         'resume_title' => 'required|max:150',
         'client_title' => 'required|max:150',
         'testimonial_title' => 'required|max:150',
         'blog_title' => 'required|max:150',
         'contact_title' => 'required|max:150',
         'interest_title' => 'required|max:150',
         'faq_title' => 'required|max:150',
         'knowledge' => 'required|max:150',
         'pricingplan' => 'required|max:150',
       ]);

       $basicsettings = Setting::first();

       $basicsettings->about_title = $request->about_title;
       $basicsettings->education_title = $request->education_title;
       $basicsettings->experince_title = $request->experince_title;
       $basicsettings->service_title = $request->service_title;
       $basicsettings->portfolio_title = $request->portfolio_title;
       $basicsettings->resume_title = $request->resume_title;
       $basicsettings->client_title = $request->client_title;
       $basicsettings->testimonial_title = $request->testimonial_title;
       $basicsettings->blog_title = $request->blog_title;
       $basicsettings->contact_title = $request->contact_title;
       $basicsettings->interest_title = $request->interest_title;
       $basicsettings->faq_title = $request->faq_title;
       $basicsettings->knowledge = $request->knowledge;
       $basicsettings->pricingplan = $request->pricingplan;
       $basicsettings->save();

       Session::flash('success', 'Section title Updated Successfully!');
       return redirect()->route('admin.sectiontitle');

    }

    // Update SEO Information
    public function seoinfo(){
       return view('admin.settings.seo');
    }
    public function updateSeoinfo(Request $request){
      
      $basicsettings = Setting::first();

      $basicsettings->meta_keywords = $request->meta_keywords;
      $basicsettings->meta_description = $request->meta_description;
      $basicsettings->save();

      Session::flash('success', 'SEO Info Updated Successfully!');
      return redirect()->route('admin.seoinfo');

   }

   // Update General Settings
   public function gsettings(){
      return view('admin.settings.gsettings');
   }

   // Update Scripts
   public function scripts(){
      return view('admin.settings.scripts');
   }

   public function updateScripts(Request $request){

      $scriptsettings = Setting::first();
      $scriptsettings->disqus_username = $request->disqus_username;
	   $scriptsettings->tawk_to_api_key = $request->tawk_to_api_key;
	   $scriptsettings->google_analytics_id = $request->google_analytics_id;
	   $scriptsettings->is_massenger_id = $request->is_massenger_id;


	   if($request->is_disqus == 'on'){
		   $scriptsettings->is_disqus = 1;
	   }else{
		   $scriptsettings->is_disqus = 0;
	   }

	   if($request->is_tawkto == 'on'){
		   $scriptsettings->is_tawkto = 1;
	   }else{
		   $scriptsettings->is_tawkto = 0;
	   }

	   if($request->is_analytics == 'on'){
		   $scriptsettings->is_analytics = 1;
	   }else{
		   $scriptsettings->is_analytics = 0;
	   }

	   if($request->is_massenger == 'on'){
		   $scriptsettings->is_massenger = 1;
	   }else{
		   $scriptsettings->is_massenger = 0;
	   }

      $scriptsettings->save();

      Session::flash('success', 'Scripts Updated Successfully!');
      return redirect()->route('admin.scripts');
   }

	// Theme Change
	public function themes() {
		return view('admin.settings.themes');
	}

	public function updateThemes(Request $request) {

        $theme = Setting::first();
		$theme->themes = $request->themes;
		$theme->save();

		Session::flash('success', "$request->themes version activated successfully!");
		return back();
   }
   
	// Home Version Change
	public function homeversion() {
      $setting = Setting::first();
      $adminprofile = Auth::user();
		return view('admin.settings.homeversion',compact('setting','adminprofile'));
	}

	public function updatehomeversion(Request $request) {
		$setting = Setting::first();
		$setting->home_version = $request->home_version;
		$setting->save();

		Session::flash('success', "$request->home_version version activated successfully!");
		return back();
   }
   

   // Page Visibility 
   public function pagevisibility(){
      return view('admin.settings.page-visibility');
   }

   public function updatepagevisibility(Request $request){

      $pagevisibility = Setting::first();

	   if($request->ishome == 'on'){
		   $pagevisibility->ishome = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->ishome = 0;
         $pagevisibility->save();
	   }

	   if($request->isabout == 'on'){
		   $pagevisibility->isabout = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isabout = 0;
         $pagevisibility->save();
	   }

	   if($request->isservice == 'on'){
		   $pagevisibility->isservice = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isservice = 0;
         $pagevisibility->save();
	   }

	   if($request->isresume == 'on'){
		   $pagevisibility->isresume = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isresume = 0;
         $pagevisibility->save();
	   }

	   if($request->istestimonial == 'on'){
		   $pagevisibility->istestimonial = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->istestimonial = 0;
         $pagevisibility->save();
	   }

	   if($request->isportfolio == 'on'){
		   $pagevisibility->isportfolio = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isportfolio = 0;
         $pagevisibility->save();
	   }

	   if($request->isblog == 'on'){
		   $pagevisibility->isblog = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isblog = 0;
         $pagevisibility->save();
	   }

	   if($request->iscontact == 'on'){
		   $pagevisibility->iscontact = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->iscontact = 0;
         $pagevisibility->save();
	   }

	   if($request->isfunfact == 'on'){
		   $pagevisibility->isfunfact = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isfunfact = 0;
         $pagevisibility->save();
	   }

	   if($request->isinterests == 'on'){
		   $pagevisibility->isinterests = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isinterests = 0;
         $pagevisibility->save();
	   }

	   if($request->ispricingplan == 'on'){
		   $pagevisibility->ispricingplan = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->ispricingplan = 0;
         $pagevisibility->save();
	   }

	   if($request->isfaq == 'on'){
		   $pagevisibility->isfaq = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isfaq = 0;
         $pagevisibility->save();
	   }

	   if($request->isclient == 'on'){
		   $pagevisibility->isclient = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isclient = 0;
         $pagevisibility->save();
      }
      
	   if($request->ishomedownload == 'on'){
		   $pagevisibility->ishomedownload = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->ishomedownload = 0;
         $pagevisibility->save();
	   }
      
	   if($request->isresumedownload == 'on'){
		   $pagevisibility->isresumedownload = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->isresumedownload = 0;
         $pagevisibility->save();
	   }
      
	   if($request->ishomesocial == 'on'){
		   $pagevisibility->ishomesocial = 1;
         $pagevisibility->save();
	   }else{
		   $pagevisibility->ishomesocial = 0;
         $pagevisibility->save();
	   }



      Session::flash('success', 'Page visibility Updated Successfully!');
      return redirect()->route('admin.pagevisibility');
   }



}
