<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Language;
use Validator;
use Session;

class LanguageController extends Controller
{
    public function index($lang = false)
    {
          $languages = Language::all();
          return view('admin.language.index', compact('languages'));
    }

    public function add(){
      return view('admin.language.add-languages');
    }

    public function edit($id){
      $language = Language::findOrFail($id);

      return view('admin.language.edit-languages', compact('language'));

    }

    public function store(Request $request)
    {
      

        $rules = [
            'name' => 'required|max:255',
            'code' => [
                'required',
                'max:255'
            ],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          $errmsgs = $validator->getMessageBag()->add('error', 'true');
          return response()->json($validator->errors());
        }

        $data = file_get_contents(resource_path('lang/') . 'default.json');
        $json_file = trim(strtolower($request->code)) . '.json';
        $path = resource_path('lang/') . $json_file;

        File::put($path, $data);

        $in['name'] = $request->name;
        $in['code'] = $request->code;
        $in['direction'] = $request->direction;
        if (Language::where('is_default', 1)->count() > 0) {
          $in['is_default'] = 0;
        } else {
          $in['is_default'] = 1;
        }
        Language::create($in);

        Session::flash('success', 'Language added successfully!');
        return redirect()->route('admin.language.index');
    }

    public function update(Request $request, $id) {

      $rules = [
          'name' => 'required|max:255',
          'code' => [
              'required',
              'max:255'
          ]
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        $errmsgs = $validator->getMessageBag()->add('error', 'true');
        return response()->json($validator->errors());
      }

      $language = Language::findOrFail($id);


      $language->name = $request->name;
      $language->code = $request->code;
      $language->direction = $request->direction;
      $language->save();

      Session::flash('success', 'Language updated successfully');
      return redirect()->route('admin.language.index');

    }

    public function editKeyword($id)
    {
      $la = Language::findOrFail($id);
      
      $page_title = "Update " . $la->name . " Keywords";
      
      $json = file_get_contents(resource_path('lang/') . $la->code . '.json');
   
      $list_lang = Language::all();

      if (empty($json)) {
          return back()->with('warning', 'File Not Found.');
      }

        return view('admin.language.edit-keyword', compact('page_title', 'json', 'la', 'list_lang'));
    }

    public function updateKeyword(Request $request, $id)
    {
        $lang = Language::findOrFail($id);
        $content = json_encode($request->keys);
        if ($content === 'null') {
            return back()->with('alert', 'At Least One Field Should Be Fill-up');
        }
        file_put_contents(resource_path('lang/') . $lang->code . '.json', $content);

        Session::flash('success', 'Updated successfully');
        return redirect()->back();
    }
    

    
    public function delete($id)
    {
        $la = Language::findOrFail($id);
        if ($la->is_default == 1) {
          return back()->with('warning', 'Default language cannot be deleted!');
        }
        @unlink('assets/front/img/languages/' . $la->icon);
        @unlink(resource_path('lang/') . $la->code . '.json');
        if (session()->get('lang') == $la->code) {
          session()->forget('lang');
        }
        $la->delete();

        Session::flash('success', 'Language Delete Successfully');
        return redirect()->route('admin.language.index');
    }

    public function default(Request $request, $id) {
      Language::where('is_default', 1)->update(['is_default' => 0]);
      $lang = Language::find($id);
      $lang->is_default = 1;
      $lang->save();

      Session::flash('success', $lang->name . 'laguage is set as defualt.');

      return redirect()->route('admin.language.index');

    }
}
