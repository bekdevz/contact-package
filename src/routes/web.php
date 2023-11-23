<?php

use Bekadmin\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;


Route::group(['namespace'=>'Bek\Contact\Http\Controller'],function () {
    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
});
