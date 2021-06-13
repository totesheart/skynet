<?php

namespace App\Providers;
use App\Setting;
use App\Language;
use App\Admin;
use App\Social;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Setting::first();
        $adminprofile = Admin::first();
        if (session()->has('lang')) {
          $currentLang = Language::where('code', session()->get('lang'))->first();
    
        } else {
          $currentLang = Language::where('is_default', 1)->first();
        }
        View::share('setting', $setting);
        View::share('adminprofile', $adminprofile);
        View::share('currentLang', $currentLang);
        View::share('socials', Social::all());
        
        
       
        /*
          if (!file_exists('core/storage/installed') && !request()->is('install') && !request()->is('install/*')) {
            header("Location: install/");
            exit;
        }
        */
    }
}
