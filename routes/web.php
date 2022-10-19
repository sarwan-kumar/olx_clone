<?php

use App\Http\Controllers\ClassifiedController;
use App\Http\Controllers\webController;
use App\Http\Controllers\support;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\User;


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

Route::get('/',[webController::class,'index']);

Route::get('/product/{itemid?}', [webController::class,'productDetails']);

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/terms', function () {
    return view('frontend.terms');
});

Route::get('/gdpr', function () {
    return view('frontend.gdpr');
});
Route::get('/privacy', function () {
    return view('frontend.privacy');
});

Route::get('/cookie', function () {
    return view('frontend.cookie');
});

Route::get('/support', function () {
    return view('frontend.support');
});

Route::get('/signup', function () {
    return view('frontend.signup');
});

Route::get('/restore', function () {
    return view('frontend.restore');
});



Route::get('/profile', function () {
    return view('frontend.profile');
});

Route::get('/settings', function () {
    return view('frontend.settings');
});

Route::get('/privacysetting', function () {
    return view('frontend.privacysetting');
});

Route::get('/changepassword', function () {
    return view('frontend.changepassword');
});

Route::get('/blacklist', function () {
    return view('frontend.blacklist');
});

Route::get('/deactivate', function () {
    return view('frontend.deactivate');
});

Route::get('/favorites', function () {
    return view('frontend.favorites');
});

Route::get('/message', function () {
    return view('frontend.message');
});
Route::get('/profileproduct', function () {
    return view('frontend.profileproduct');
});

Route::get('/dealerlist', function () {
    return view('frontend.dealerlist');
});

Route::get('/dealerdetail', function () {
    return view('frontend.dealerdetail');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blogdetail', function () {
    return view('frontend.blogdetail');
});

Route::get('/postvehicle', function () {
    return view('frontend.postvehicle');
});

Route::get('/myvehicle', function () {
    return view('frontend.myvehicle');
});


Route::group(['prefix'=>'admin'],function(){

    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::get('/users', function () {
        return view('admin.users');
    });

    Route::get('/product', function () {
        return view('admin.product');
    });

    Route::get('/request', function () {
        return view('admin.request');
    });

    Route::get('/gallery', function () {
        return view('admin.gallery');
    });

    Route::get('/inbox',[support::class,'index']);


});






Auth::routes();
Route::resource('classified', ClassifiedController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



////User
Route::get('/User', [App\Http\Controllers\User::class,'show']);
Route::get('/data/{type}', [App\Http\Controllers\ClassifiedController::class,'shows']);
Route::get('/Approve/{id}', [App\Http\Controllers\ClassifiedController::class,'StatusApprove']);
Route::get('/Reject/{id}', [App\Http\Controllers\ClassifiedController::class,'StatusReject']);

Route::get('/Verify/{id}', [App\Http\Controllers\User::class,'Verify']);
Route::get('/delete_user/{id}', [App\Http\Controllers\User::class,'delete']);



///support
Route::get('/Support', [App\Http\Controllers\support::class,'index']);






