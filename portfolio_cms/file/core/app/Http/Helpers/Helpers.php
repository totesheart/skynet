<?php
use App\Setting;
use App\Language;


if (! function_exists('currLanguage')) {
  function currLanguage() {
    if (session()->has('lang')) {
      $currentLang = Language::where('code', session()->get('lang'))->first();

    } else {
      $currentLang = Language::where('is_default', 1)->first();
    }
    return $currentLang;
  }
}



?>
