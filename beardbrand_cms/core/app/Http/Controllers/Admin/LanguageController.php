<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Language;
use App\Sectiontitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
            'direction' => 'required',
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
        $lang_id = Language::create($in)->id;

        // Section title Create by language
        $sectiontitle = new Sectiontitle();
        $sectiontitle->language_id = $lang_id;
        $sectiontitle->about_title = 'about_title';
        $sectiontitle->about_subtitle = 'about_subtitle';
        $sectiontitle->about_image = 'about_image';
        $sectiontitle->plan_title = 'plan_title';
        $sectiontitle->plan_subtitle = 'plan_subtitle';
        $sectiontitle->offer_title = 'offer_title';
        $sectiontitle->offer_subtitle = 'offer_subtitle';
        $sectiontitle->offer_image = 'offer_image';
        $sectiontitle->service_title = 'service_title';
        $sectiontitle->service_subtitle = 'service_subtitle';
        $sectiontitle->entertainment_title = 'entertainment_title';
        $sectiontitle->entertainment_subtitle = 'entertainment_subtitle';
        $sectiontitle->media_zone_title = 'media_zone_title';
        $sectiontitle->media_zone_subtitle = 'media_zone_subtitle';
        $sectiontitle->contact_title = 'contact_title';
        $sectiontitle->contact_subtitle = 'contact_subtitle';
        $sectiontitle->media_title = 'media_title';
        $sectiontitle->branch_title = 'branch_title';
        $sectiontitle->team_title = 'team_title';
        $sectiontitle->gallery_title = 'gallery_title';
        $sectiontitle->shop_title = 'shop_title';
        $sectiontitle->blog_title = 'blog_title';
        $sectiontitle->blog_subtitle = 'blog_subtitle';
        $sectiontitle->testimonial_title = 'testimonial_title';
        $sectiontitle->testimonial_subtitle = 'testimonial_subtitle';
        $sectiontitle->funfact_bg = 'funfact_bg';
        $sectiontitle->pricing_bg = 'pricing_bg';
        $sectiontitle->testimonial_bg = 'testimonial_bg';
        $sectiontitle->save();

        // Settings Create by language
        $newlangsetting = new Setting();
        $newlangsetting->language_id = $lang_id;
        $newlangsetting->website_title = 'website_title';
        $newlangsetting->base_color = '983ce9';
        $newlangsetting->header_logo = 'header_logo';
        $newlangsetting->footer_logo = 'footer_logo';
        $newlangsetting->fav_icon = 'fav_icon';
        $newlangsetting->breadcrumb_image = 'breadcrumb_image';
        $newlangsetting->number = 'number';
        $newlangsetting->email = 'email';
        $newlangsetting->contactemail = 'contactemail';
        $newlangsetting->address = 'address';
        $newlangsetting->footer_text = 'footer_text';
        $newlangsetting->meta_keywords = 'meta_keywords';
        $newlangsetting->meta_description = 'meta_description';
        $newlangsetting->copyright_text = 'copyright_text';
        $newlangsetting->google_recaptcha_site_key = 'google_recaptcha_site_key';
        $newlangsetting->google_recaptcha_secret_key = 'google_recaptcha_secret_key';
        $newlangsetting->is_recaptcha = '0';
        $newlangsetting->messenger = 'messenger';
        $newlangsetting->disqus = 'disqus';
        $newlangsetting->add_this_status = 'add_this_status';
        $newlangsetting->facebook_pexel = 'facebook_pexel';
        $newlangsetting->google_analytics = 'google_analytics';
        $newlangsetting->announcement = 'announcement';
        $newlangsetting->announcement_delay = 1;
        $newlangsetting->maintainance_text = 'maintainance_text';
        $newlangsetting->tawk_to = 'tawk_to';
        $newlangsetting->cookie_alert_text = 'cookie_alert_text';
        $newlangsetting->save();

        $notification = array(
          'messege' => 'Language added successfully!',
          'alert' => 'success'
        );
        return redirect()->route('admin.language.index')->with('notification', $notification);
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

      $notification = array(
        'messege' => 'Language updated successfully',
        'alert' => 'success'
      );
      return redirect()->route('admin.language.index')->with('notification', $notification);

    }

    public function editKeyword($id)
    {
      $la = Language::findOrFail($id);
      
      $page_title = "Update " . $la->name . " Language Keywords";
      
      $json = file_get_contents(resource_path('lang/') . $la->code . '.json');


      if (empty($json)) {
          return back()->with('warning', 'File Not Found.');
      }

        return view('admin.language.edit-keyword', compact('page_title', 'json', 'la'));
    }

    public function updateKeyword(Request $request, $id)
    {
        $lang = Language::findOrFail($id);
        $content = json_encode($request->keys);
        if ($content === 'null') {
            return back()->with('alert', 'At Least One Field Should Be Fill-up');
        }
        file_put_contents(resource_path('lang/') . $lang->code . '.json', $content);

        $notification = array(
          'messege' => 'Updated successfully',
          'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }
    

    
    public function delete($id)
    {
        $la = Language::findOrFail($id);
        if ($la->is_default == 1) {
          $notification = array(
            'messege' => 'Default language cannot be deleted!',
            'alert' => 'warning'
          );
          return back()->with('notification', $notification);
        }
        @unlink('assets/front/img/languages/' . $la->icon);
        @unlink(resource_path('lang/') . $la->code . '.json');
        if (session()->get('lang') == $la->code) {
          session()->forget('lang');
        }
     
        $sectiontitle = Sectiontitle::where('language_id', $id)->first();
        $sectiontitle->delete();
        $setting = Setting::where('language_id', $id)->first();
        $setting->delete();
        $la->delete();

        $notification = array(
          'messege' => 'Language Delete Successfully',
          'alert' => 'success'
        );
        return redirect()->route('admin.language.index')->with('notification', $notification);
    }

    public function default(Request $request, $id) {
      Language::where('is_default', 1)->update(['is_default' => 0]);
      $lang = Language::find($id);
      $lang->is_default = 1;
      $lang->save();

      $notification = array(
        'messege' => 'laguage is set as defualt.',
        'alert' => 'success'
      );

      return redirect()->route('admin.language.index')->with('notification', $notification);

    }
}