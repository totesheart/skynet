<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Slider;

class SliderController extends Controller
{
    public function index(){
	    $sliders =  Slider::all();
    	return view('admin.home.slider.index', compact('sliders'));
    }

    public function store(Request $request){
	    $img = $request->file('file');
	    $allowedExts = array('jpg', 'png', 'jpeg');

	    $request->validate([
		   'file' => [
			   function($attribute, $value, $fail) use ($img, $allowedExts) {
				   $ext = $img->getClientOriginalExtension();
				   if(!in_array($ext, $allowedExts)) {
					   return $fail("Only png, jpg, jpeg images are allowed");
				   }
			   }
		   ]
	   ]);
	    $slider = new Slider();

	    if($request->hasFile('file')){

		    $file = $request->file('file');
		    $extension = $file->getClientOriginalExtension();
		    $image = time().rand().'.'.$extension;
		    $file->move('assets/front/img/', $image);

		    $slider->image = $image;
	    }

	    $slider->save();


	    Session::flash('success', 'Slider Added successfully!');
	    return redirect()->route('admin.slider.index');
    }

	//Slider Delete
	public function delete($id){
		$slider = Slider::find($id);
		@unlink('assets/front/img/'. $slider->image);
		$slider->delete();

		Session::flash('success', 'Slider Deleted successfully!');
		return redirect()->route('admin.slider.index');
	}



}
