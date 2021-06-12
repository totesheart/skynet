<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Entertainment;
use App\Sectiontitle;
use Session;

class EntertainmentController extends Controller
{
      public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function entertainment(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $entertainments = Entertainment::where('language_id', $lang)->orderBy('id', 'DESC')->get();
        $saectiontitle = Sectiontitle::where('language_id', $lang)->first();
        
        return view('admin.entertainment.index', compact('entertainments', 'saectiontitle'));
    }

    // Add Entertainment
    public function add(){
        return view('admin.entertainment.add');
    }

    // Store Entertainment
    public function store(Request $request){

        $request->validate([
            'icon' => 'required|mimes:jpeg,jpg,png',
            'name' => 'required|max:150',
            'counter' => 'required|numeric',
        ]);
        $entertainment = new Entertainment();

        if($request->hasFile('icon')){
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);
            $entertainment->icon = $icon;
        }
      
     
        $entertainment->name = $request->name;
        $entertainment->counter = $request->counter;
        $entertainment->language_id = $request->language_id;
        $entertainment->status = $request->status;
        $entertainment->save();

        $notification = array(
            'messege' => 'Entertainment Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Entertainment Delete
    public function delete($id){

        $entertainment = Entertainment::find($id);
        @unlink('assets/front/img/'. $entertainment->icon);
        $entertainment->delete();

        return back();
    }

    // Entertainment Edit
    public function edit($id){

        $entertainment = Entertainment::find($id);
        return view('admin.entertainment.edit', compact('entertainment'));

    }

    // Update Entertainment
    public function update(Request $request, $id){

        $id = $request->id;
         $request->validate([
            'name' => 'required|max:150',
            'counter' => 'required|numeric',
            'icon' => 'mimes:jpeg,jpg,png',
        ]);

        $entertainment = Entertainment::find($id);

        if($request->hasFile('icon')){
            @unlink('assets/front/img/'. $entertainment->icon);
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);

            $entertainment->icon = $icon;
        }

        $entertainment->name = $request->name;
        $entertainment->counter = $request->counter;
        $entertainment->language_id = $request->language_id;
        $entertainment->status = $request->status;
        $entertainment->save();

        $notification = array(
            'messege' => 'Entertainment Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.entertainment').'?language='.$this->lang->code)->with('notification', $notification);;
    }

    public function entertainmentcontent(Request $request, $id){
       
        $request->validate([
            'entertainment_title' => 'required',
            'entertainment_subtitle' => 'required',
        ]);

        $entertainment_title = Sectiontitle::where('language_id', $id)->first();

        $entertainment_title->update($request->all());

        $notification = array(
            'messege' => 'Entertainment Content Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.entertainment').'?language='.$this->lang->code)->with('notification', $notification);
    }

}