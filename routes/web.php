<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\LanguageController;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backend\NewsCatController;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AdminProfileController;

use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\GeneralController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PlaceController;
use App\Http\Controllers\backend\MapController;
use App\Http\Controllers\backend\PopularDesController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\IndexController;


use App\Http\Controllers\ContactController;
use App\Http\Controllers\TourController;




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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.user.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:admin'])->group(function(){

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

});  // end Middleware admin


Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');

Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');

Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');

Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');



Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');

  
  Route::get('/admin/all/user',[UserController::class,'index'])->name('admin.view.user');
   Route::delete('/admin/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

  Route::get('/admin/general',[GeneralController::class,'index'])->name('general');
   Route::post('/admin/general',[GeneralController::class,'store'])->name('general.store');


 Route::post('vue/sync-translation',[LanguageController::class,'sync_vue_translation']);

  Route::get('/admin/language', [LanguageController::class,'index'])->name('site.lang');

    Route::get('/admin/edit/{lang}/staticTranslations', [LanguageController::class,'editStaticTrans'])->name('static.trans');

    Route::post('/admin/update/{lang}/staticTranslations/content', [LanguageController::class,'updateStaticTrans'])->name('static.trans.update');

    Route::post('/admin/language/store/lang/', [LanguageController::class,'store'])->name('site.lang.store');

    Route::post('/admin/language/update/lang/{id}', [LanguageController::class,'update'])->name('site.lang.update');

    Route::delete('/admin/language/delete/lang/{id}', [LanguageController::class,'delete'])->name('site.lang.delete');


   //news Category
   
    Route::get('admin/all/news/category',[NewsCatController::class,'index'])->name('news.category.index');
     Route::get('admin/news/category/add',[NewsCatController::class,'addCategory'])->name('news.category.add');

    Route::post('admin/news/category/store',[NewsCatController::class,'store'])->name('news.category.store');

    Route::get('admin/news/category/edit/{id}',[NewsCatController::class,'edit'])->name('news.category.edit');

    Route::post('admin/news/category/update/{id}',[NewsCatController::class,'update'])->name('news.category.update');
    Route::get('admin/news/category/delete/{id}',[NewsCatController::class,'delete'])->name('news.category.delete');




    //news

    Route::get('admin/all/news',[NewsController::class,'index'])->name('news.all');
     Route::get('admin/news/add',[NewsController::class,'addNews'])->name('news.add');

    Route::post('admin/news/store',[NewsController::class,'store'])->name('news.store');

    Route::get('admin/news/edit/{id}',[NewsController::class,'edit'])->name('news.edit');

    Route::post('admin/news/update/{id}',[NewsController::class,'update'])->name('news.update');
    Route::get('admin/news/delete/{id}',[NewsController::class,'delete'])->name('news.delete');


    //slider

   

    Route::get('admin/all/slider',[SliderController::class,'index'])->name('slider.all');
    Route::get('admin/slider/add',[SliderController::class,'addSlider'])->name('slider.add');

    Route::post('admin/slider/store',[SliderController::class,'store'])->name('slider.store');

    Route::get('admin/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');

    Route::post('admin/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('admin/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');


    //about

    Route::get('admin/all/overview',[AboutController::class,'index'])->name('about.all');
    Route::get('admin/overview/add',[AboutController::class,'add'])->name('about.add');

    Route::post('admin/overview/store',[AboutController::class,'store'])->name('about.store');

    Route::get('admin/overview/edit/{id}',[AboutController::class,'edit'])->name('about.edit');

    Route::post('admin/overview/update/{id}',[AboutController::class,'update'])->name('about.update');
    Route::get('admin/overview/delete/{id}',[AboutController::class,'delete'])->name('about.delete');

   //banner

    Route::get('admin/all/banner',[BannerController::class,'index'])->name('banner.all');
    Route::get('admin/banner/add',[BannerController::class,'addbanner'])->name('banner.add');

    Route::post('admin/banner/store',[BannerController::class,'store'])->name('banner.store');

    Route::get('admin/banner/edit/{id}',[BannerController::class,'edit'])->name('banner.edit');

    Route::post('admin/banner/update/{id}',[BannerController::class,'update'])->name('banner.update');
    Route::get('admin/banner/delete/{id}',[BannerController::class,'delete'])->name('banner.delete');


    //Map


    Route::get('admin/all/map',[MapController::class,'index'])->name('map.all');
    Route::get('admin/map/add',[MapController::class,'addMap'])->name('map.add');

    Route::post('admin/map/store',[MapController::class,'store'])->name('map.store');

    Route::get('admin/map/edit/{id}',[MapController::class,'edit'])->name('map.edit');

    Route::post('admin/map/update/{id}',[MapController::class,'update'])->name('map.update');
    Route::get('admin/map/delete/{id}',[MapController::class,'delete'])->name('map.delete');



    //des


    Route::get('admin/all/des',[PopularDesController::class,'index'])->name('des.all');
    Route::get('admin/des/add',[PopularDesController::class,'addDes'])->name('des.add');

    Route::post('admin/des/store',[PopularDesController::class,'store'])->name('des.store');

    Route::get('admin/des/edit/{id}',[PopularDesController::class,'edit'])->name('des.edit');

    Route::post('admin/des/update/{id}',[PopularDesController::class,'update'])->name('des.update');
    Route::get('admin/des/delete/{id}',[PopularDesController::class,'delete'])->name('des.delete');


    //pages




    Route::get('admin/all/pages',[PageController::class,'index'])->name('page.all');
    Route::get('admin/page/add',[PageController::class,'addPage'])->name('page.add');

    Route::post('admin/page/store',[PageController::class,'store'])->name('page.store');


    Route::get('admin/page/edit/{id}',[PageController::class,'edit'])->name('page.edit');


    Route::post('admin/page/update/{id}',[PageController::class,'update'])->name('page.update');
    Route::get('admin/page/delete/{id}',[PageController::class,'delete'])->name('page.delete');


    // place 

     Route::get('admin/all/place',[PlaceController::class,'index'])->name('place.all');
    Route::get('admin/place/add',[PlaceController::class,'addplace'])->name('place.add');
     Route::get('admin/place/edit/{id}',[PlaceController::class,'edit'])->name('place.edit');
     Route::post('admin/place/update/{id}',[PlaceController::class,'update'])->name('place.update');

     Route::post('admin/place/store',[PlaceController::class,'store'])->name('place.store');
     Route::get('admin/place/multi/image/add/{id}',[PlaceController::class,'addMultiImage'])->name('place.multi_image');

     Route::post('admin/place/image/store',[PlaceController::class,'MultiImagestore'])->name('place.multi.image.store');

     Route::get('admin/place/multi/image/edit/{id}',[PlaceController::class,'editmutiImage'])->name('admin.edit.multi.image');
     Route::post('admin/place/multi/image/update/{id}',[PlaceController::class,'UpdatemutiImage'])->name('admin.update.multi.image');


      Route::get('admin/place/multi/image/delete/{id}',[PlaceController::class,'mutiImagedel'])->name('admin.delete.multi.image');

   

     Route::get('admin/place/details/{id}',[PlaceController::class,'details'])->name('place.details');

    
     Route::get('admin/place/delete/{id}',[PlaceController::class,'delete'])->name('place.delete');
     Route::get('/admin/seo', [OrderController::class, 'seo'])->name('admin.seo');
   Route::post('/admin/seo/update', [OrderController::class, 'updateSeo'])->name('update.seo');

   //order

   Route::get('admin/pending/order/view',[OrderController::class,'index'])->name('pending.order');

   Route::get('admin/order/view/detail/{id}',[OrderController::class,'orderDetails'])->name('order.details');
     Route::post('admin/order/view/edit/{id}',[OrderController::class,'orderStatus'])->name('order.update');

    Route::get('admin/accepted/order/view',[OrderController::class,'activeOrder'])->name('active.order');
     Route::get('admin/cancel/order/view',[OrderController::class,'CancelOrder'])->name('cancel.order');




    // frontend



    Route::get('/',[FrontendController::class,'index']);

       Route::get('/changelang', [GuestController::class,'changelang'])->name('changelang');

    Route::get('/contact', [ContactController::class,'index'])->name('contact');

    Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);
     Route::post('/contact', [ContactController::class,'ContactSave'])->name('contact.store');

     Route::get('/place/details/{id}', [TourController::class, 'single_place'])->name('place.tour');

     Route::get('/latest/news', [FrontendController::class, 'latestNews'])->name('news');
     Route::get('/latest/news/{slug}', [FrontendController::class, 'newsDetails'])->name('news.details');

     Route::get('/page/{slug}', [FrontendController::class, 'pageDetails'])->name('page'); 
     Route::get('/hotel/booking',[FrontendController::class,'HotelBooking'])->name('hotel.booking');
      Route::get('/tour/booking',[FrontendController::class,'TourBooking'])->name('tour.booking');

       Route::get('/destination/{slug}', [FrontendController::class, 'singleDestination'])->name('single.destination'); 

      //order 


      Route::post('/new/order',[IndexController::class,'OrderSave'])->name('new.order');


