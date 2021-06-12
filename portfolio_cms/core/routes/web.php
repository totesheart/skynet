<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('login', function() {
    return view('admin.login');
})->name('login');




/*=======================================================
 Front Routes 
=======================================================*/

Route::group(['middleware' => 'setlang'], function() {

Route::get('/', 'Front\FrontendController@index')->name('front.index');

Route::get('/blog', 'Front\FrontendController@blogs')->name('front.blogs');
Route::get('/blog-details/{slug}', 'Front\FrontendController@blogdetails')->name('front.blogdetails');
Route::get('/service-details/{id}', 'Front\FrontendController@servicedetails')->name('front.servicedetails');
Route::post('/sendmail', 'Front\FrontendController@sendmail')->name('front.sendmail');
Route::get('/portfolios', 'Front\FrontendController@portfolios')->name('front.portfolios');
Route::get('/portfolio/{slug}', 'Front\FrontendController@portfoliodetails')->name('front.portfoliodetails');
Route::get('/contact', 'Front\FrontendController@contact')->name('front.contact');

Route::get('/changelanguage/{lang}', 'Front\FrontendController@changeLanguage')->name('changeLanguage');

});






/*=======================================================
Admin Routes
=======================================================*/

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function(){
    Route::get('/', 'Admin\LoginController@login')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@authenticate')->name('admin.auth');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function(){

    //Admin Logout Route
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');

    // Admin Profile Routs
    Route::get('/profile/edit', 'Admin\ProfileController@editProfile')->name('admin.editProfile');
    Route::post('/profile/update', 'Admin\ProfileController@updateProfile')->name('admin.updateProfile');
    Route::get('/profile/password/edit', 'Admin\ProfileController@editPassword')->name('admin.editPassword');
    Route::post('/profile/password/update', 'Admin\ProfileController@updatePassword')->name('admin.updatePassword');

    // Basic Information Route
    Route::get('/basicinfo', 'Admin\SettingController@basicinfo')->name('admin.basicinfo');
    Route::post('/basicinfo/update', 'Admin\SettingController@updateBasicinfo')->name('admin.setting.updateBasicinfo');

    // Themes Route
    Route::get('/themes', 'Admin\SettingController@themes')->name('admin.themes');
    Route::post('/theme/update', 'Admin\SettingController@updateThemes')->name('admin.themes.update');

	// Admin Home Version Setting Routes
	Route::get('/homeversion', 'Admin\SettingController@homeversion')->name('admin.homeversion');
	Route::post('/homeversion/post', 'Admin\SettingController@updatehomeversion')->name('admin.homeversion.update');

	// Section Title Route
    Route::get('/sectiontitle', 'Admin\SettingController@sectiontitle')->name('admin.sectiontitle');
    Route::post('/sectiontitle/update', 'Admin\SettingController@updateSectiontitle')->name('admin.setting.updateSectiontitle');

	// Page Visibility  Title Route
    Route::get('/page-visibility', 'Admin\SettingController@pagevisibility')->name('admin.pagevisibility');
    Route::post('/page-visibility/update', 'Admin\SettingController@updatepagevisibility')->name('admin.pagevisibility.update');

    // SEO Information Route
    Route::get('/seoinfo', 'Admin\SettingController@seoinfo')->name('admin.seoinfo');
    Route::post('/seoinfo/update', 'Admin\SettingController@updateSeoinfo')->name('admin.setting.updateSeoinfo');


    // Socila Links Route
    Route::get('/slinks', 'Admin\SocialController@slinks')->name('admin.slinks');
    Route::post('/slinks/store', 'Admin\SocialController@storeSlinks')->name('admin.storeSlinks');
    Route::post('/slinks/update{id}/', 'Admin\SocialController@updateSlinks')->name('admin.updateSlinks');
    Route::get('/slinks/edit/{id}/', 'Admin\SocialController@editSlinks')->name('admin.editSlinks');
    Route::get('/slinks/delete{id}/', 'Admin\SocialController@deleteSlinks')->name('admin.deleteSlinks');

    // Scripts Route
    Route::get('/scripts', 'Admin\SettingController@scripts')->name('admin.scripts');
    Route::post('/scripts/update', 'Admin\SettingController@updateScripts')->name('admin.setting.updateScripts');

    // Home Section (Static Version) Routes
    Route::get('/herosection/static', 'Admin\HerosectionController@static')->name('admin.herosection.static');
    Route::post('/herosection/static/update', 'Admin\HerosectionController@update')->name('admin.herosection.static.update');

    // Home Section (Slider Version) Routes
	Route::get('/herosection/sliders', 'Admin\SliderController@index')->name('admin.slider.index');
	Route::post('/herosection/slider/store', 'Admin\SliderController@store')->name('admin.slider.store');
	Route::get('/herosection/slider/delete/{id}/', 'Admin\SliderController@delete')->name('admin.slider.delete');


    // Home Section (Video Version) Routes
    Route::get('/herosection/video', 'Admin\HerosectionController@video')->name('admin.herosection.video');
    Route::post('/herosection/video/update', 'Admin\HerosectionController@videoupdate')->name('admin.herosection.video.update');


    // About Us Route
    Route::get('/about', 'Admin\AboutController@about_me')->name('admin.about_me');
    Route::post('/about/update', 'Admin\AboutController@update_about_me')->name('admin.update_about_me');

    // Contact Info Route
    Route::get('/about/contact-info', 'Admin\AboutController@contact_info')->name('admin.contact_info');
    Route::post('/about/contact-info/update', 'Admin\AboutController@contact_info_update')->name('admin.contact_info_update');

    // Fun Fact Route
    Route::get('/about/funfact', 'Admin\AboutController@funfact')->name('admin.funfact');
    Route::get('/about/funfact/add', 'Admin\AboutController@funfact_add')->name('admin.funfact_add');
    Route::post('/about/funfact/store', 'Admin\AboutController@funfact_store')->name('admin.funfact_store');
    Route::get('/about/funfact/delete/{id}/', 'Admin\AboutController@funfact_delete')->name('admin.funfact_delete');
    Route::get('/about/funfact/edit/{id}/', 'Admin\AboutController@funfact_edit')->name('admin.funfact_edit');
    Route::post('/about/funfact/update/{id}/', 'Admin\AboutController@funfact_update')->name('admin.funfact_update');



    //Service Route
    Route::get('/service', 'Admin\ServiceController@service')->name('admin.service');
    Route::get('/service/add', 'Admin\ServiceController@add')->name('admin.service.add');
    Route::post('/service/store', 'Admin\ServiceController@store')->name('admin.service.store');
    Route::get('/service/delete/{id}/', 'Admin\ServiceController@delete')->name('admin.service.delete');
    Route::get('/service/edit/{id}/', 'Admin\ServiceController@edit')->name('admin.service.edit');
    Route::post('/service/update/{id}/', 'Admin\ServiceController@update')->name('admin.service.update');

    //Education Route
    Route::get('/education', 'Admin\EducationController@education')->name('admin.education');
    Route::get('/education/add', 'Admin\EducationController@add')->name('admin.education.add');
    Route::post('/education/store', 'Admin\EducationController@store')->name('admin.education.store');
    Route::get('/education/delete/{id}/', 'Admin\EducationController@delete')->name('admin.education.delete');
    Route::get('/education/edit/{id}/', 'Admin\EducationController@edit')->name('admin.education.edit');
    Route::post('/education/update/{id}/', 'Admin\EducationController@update')->name('admin.education.update');

    //Experince Route
    Route::get('/experince', 'Admin\ExperinceController@experince')->name('admin.experince');
    Route::get('/experince/add', 'Admin\ExperinceController@add')->name('admin.experince.add');
    Route::post('/experince/store', 'Admin\ExperinceController@store')->name('admin.experince.store');
    Route::get('/experince/delete/{id}/', 'Admin\ExperinceController@delete')->name('admin.experince.delete');
    Route::get('/experince/edit/{id}/', 'Admin\ExperinceController@edit')->name('admin.experince.edit');
    Route::post('/experince/update/{id}/', 'Admin\ExperinceController@update')->name('admin.experince.update');

    //Portfolio Route
    Route::get('/portfolio', 'Admin\PortfolioController@portfolio')->name('admin.portfolio');
    Route::get('/portfolio/add', 'Admin\PortfolioController@add')->name('admin.portfolio.add');
    Route::post('/portfolio/store', 'Admin\PortfolioController@store')->name('admin.portfolio.store');
    Route::get('/portfolio/delete/{id}/', 'Admin\PortfolioController@delete')->name('admin.portfolio.delete');
    Route::get('/portfolio/edit/{id}/', 'Admin\PortfolioController@edit')->name('admin.portfolio.edit');
    Route::post('/portfolio/update/{id}/', 'Admin\PortfolioController@update')->name('admin.portfolio.update');

    //Skills Category Route
    Route::get('/skill/skill-category', 'Admin\ScategoryController@skillCategory')->name('admin.scategory');
    Route::get('/skill/skill-category/add', 'Admin\ScategoryController@add')->name('admin.scategory.add');
    Route::post('/skill/skill-category/store', 'Admin\ScategoryController@store')->name('admin.scategory.store');
    Route::get('/skill/skill-category/delete/{id}/', 'Admin\ScategoryController@delete')->name('admin.scategory.delete');
    Route::get('/skill/skill-category/edit/{id}/', 'Admin\ScategoryController@edit')->name('admin.scategory.edit');
    Route::post('/skill/skill-category/update/{id}/', 'Admin\ScategoryController@update')->name('admin.scategory.update');



    //Skills  Route
    Route::get('/skill', 'Admin\SkillController@skill')->name('admin.skill');
    Route::get('/skill/add', 'Admin\SkillController@add')->name('admin.skill.add');
    Route::post('/skill/store', 'Admin\SkillController@store')->name('admin.skill.store');
    Route::get('/skill/delete/{id}/', 'Admin\SkillController@delete')->name('admin.skill.delete');
    Route::get('/skill/edit/{id}/', 'Admin\SkillController@edit')->name('admin.skill.edit');
    Route::post('/skill/update/{id}/', 'Admin\SkillController@update')->name('admin.skill.update');

    // Testimonial Route
    Route::get('/testimonial', 'Admin\TestimonialController@testimonial')->name('admin.testimonial');
    Route::get('/testimonial/add', 'Admin\TestimonialController@add')->name('admin.testimonial.add');
    Route::post('/testimonial/store', 'Admin\TestimonialController@store')->name('admin.testimonial.store');
    Route::get('/testimonial/delete/{id}/', 'Admin\TestimonialController@delete')->name('admin.testimonial.delete');
    Route::get('/testimonial/edit/{id}/', 'Admin\TestimonialController@edit')->name('admin.testimonial.edit');
    Route::post('/testimonial/update/{id}/', 'Admin\TestimonialController@update')->name('admin.testimonial.update');

    // Pricing Plan Route
    Route::get('/pricing-plan', 'Admin\PricingController@pricing')->name('admin.pricing');
    Route::get('/pricing-plan/edit/{id}/', 'Admin\PricingController@edit')->name('admin.pricing.edit');
    Route::get('/pricing-plan/delete/{id}/', 'Admin\PricingController@delete')->name('admin.pricing.delete');
    Route::get('/pricing-plan/add', 'Admin\PricingController@add')->name('admin.pricing.add');
    Route::post('/pricing-plan/store', 'Admin\PricingController@store')->name('admin.pricing.store');
    Route::post('/pricing-plan/update/{id}/', 'Admin\PricingController@update')->name('admin.pricing.update');




    // Client Route
    Route::get('/client', 'Admin\ClientController@client')->name('admin.client');
    Route::get('/client/add', 'Admin\ClientController@add')->name('admin.client.add');
    Route::post('/client/store', 'Admin\ClientController@store')->name('admin.client.store');
    Route::get('/client/delete/{id}/', 'Admin\ClientController@delete')->name('admin.client.delete');
    Route::get('/client/edit/{id}/', 'Admin\ClientController@edit')->name('admin.client.edit');
    Route::post('/client/update/{id}/', 'Admin\ClientController@update')->name('admin.client.update');

    // Blog Category Route
    Route::get('/blog/blog-category', 'Admin\BcategoryController@bcategory')->name('admin.bcategory');
    Route::get('/blog/blog-category/add', 'Admin\BcategoryController@add')->name('admin.bcategory.add');
    Route::post('/blog/blog-category/store', 'Admin\BcategoryController@store')->name('admin.bcategory.store');
    Route::get('/blog/blog-category/delete/{id}/', 'Admin\BcategoryController@delete')->name('admin.bcategory.delete');
    Route::get('/blog/blog-category/edit/{id}/', 'Admin\BcategoryController@edit')->name('admin.bcategory.edit');
    Route::post('/blog/blog-category/update/{id}/', 'Admin\BcategoryController@update')->name('admin.bcategory.update');

    // Blog  Route
    Route::get('/blog', 'Admin\BlogController@blog')->name('admin.blog');
    Route::get('/blog/add', 'Admin\BlogController@add')->name('admin.blog.add');
    Route::post('/blog/store', 'Admin\BlogController@store')->name('admin.blog.store');
    Route::get('/blog/delete/{id}/', 'Admin\BlogController@delete')->name('admin.blog.delete');
    Route::get('/blog/edit/{id}/', 'Admin\BlogController@edit')->name('admin.blog.edit');
    Route::post('/blog/update/{id}/', 'Admin\BlogController@update')->name('admin.blog.update');

    // Admin Blog Archive Routes
    Route::get('/archives', 'Admin\ArchiveController@index')->name('admin.archive');
    Route::get('/archive/add', 'Admin\ArchiveController@add')->name('admin.archive.add');
    Route::post('/archive/store', 'Admin\ArchiveController@store')->name('admin.archive.store');
    Route::get('/archive/edit/{id}/', 'Admin\ArchiveController@edit')->name('admin.archive.edit');
    Route::post('/archive/update/{id}/', 'Admin\ArchiveController@update')->name('admin.archive.update');
    Route::get('/archive/delete/{id}/', 'Admin\ArchiveController@delete')->name('admin.archive.delete');

    // Admin Language Routes
    Route::get('/languages', 'Admin\LanguageController@index')->name('admin.language.index');//done
    Route::get('/language/add', 'Admin\LanguageController@add')->name('admin.language.add');//done
    Route::get('/language/{id}/edit', 'Admin\LanguageController@edit')->name('admin.language.edit');//done
    Route::get('/language/{id}/edit/keyword', 'Admin\LanguageController@editKeyword')->name('admin.language.editKeyword');//done
    Route::post('/language/store', 'Admin\LanguageController@store')->name('admin.language.store');//done

    Route::post('/language/upload', 'Admin\LanguageController@upload')->name('admin.language.upload');
    Route::post('/language/{id}/uploadUpdate', 'Admin\LanguageController@uploadUpdate')->name('admin.language.uploadUpdate');

    Route::post('/language/{id}/default', 'Admin\LanguageController@default')->name('admin.language.default');//done
    
    Route::post('/language/{id}/delete', 'Admin\LanguageController@delete')->name('admin.language.delete');;//done
    Route::post('/language/{id}/update', 'Admin\LanguageController@update')->name('admin.language.update');//done
    Route::post('/language/{id}/update/keyword', 'Admin\LanguageController@updateKeyword')->name('admin.language.updateKeyword');//done

    // Admin Footer Logo Text Routes
    Route::get('/footer', 'Admin\FooterController@index')->name('admin.footer.index');
    Route::post('/footer/update', 'Admin\FooterController@update')->name('admin.footer.update');

    // Admin Message  Routes

    Route::get('/message', 'Admin\MessageController@index')->name('admin.message');
    Route::get('/message/view/{id}', 'Admin\MessageController@view')->name('admin.message.view');
    Route::get('/message/delete/{id}', 'Admin\MessageController@delete')->name('admin.message.delete');
    Route::get('/message/delete', 'Admin\MessageController@deleteall')->name('admin.message.deleteall');

});



