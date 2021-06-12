<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Session;

class HerosectionController extends Controller
{
    public  function static(){
    	return view('admin.home.static');
    }
    public  function video(){
    	return view('admin.home.video');
    }
    public  function agency(){
    	return view('admin.home.agency');
    }

	///Update static Image
	public function update(Request $request){
		$request->validate([
			'heroarea_bg' => 'mimes:jpeg,jpg,png',
		]);

		$basicsettings = Setting::first();

		if($request->hasFile('heroarea_bg')){
			@unlink('assets/front/img/'. $basicsettings->heroarea_bg);

			$file = $request->file('heroarea_bg');
			$file->move('assets/front/img/','heroarea_bg.jpg');
		}

		$basicsettings->save();

		Session::flash('success', 'Static image updated successfully!');
		return redirect()->route('admin.herosection.static');
	}

	///Update Video
	public function videoupdate(Request $request){
		$request->validate([
			'hero_section_video' => 'required',
		]);

		$basicsettings = Setting::first();
		$basicsettings->hero_section_video = $request->hero_section_video;
		$basicsettings->save();

		Session::flash('success', 'Video updated successfully!');
		return redirect()->route('admin.herosection.video');
	}

	///Update Agency
	public function agencyupdate(Request $request){

		$request->validate([
			'ag_title' => 'required|max:150',
			'ag_subtitle' => 'required|max:255',
		]);

		$basicsettings = Setting::first();
		$basicsettings->ag_title = $request->ag_title;
		$basicsettings->ag_subtitle = $request->ag_subtitle;
		$basicsettings->save();

		Session::flash('success', 'Agency home updated successfully!');
		return redirect()->route('admin.herosection.agency');
	}

}
