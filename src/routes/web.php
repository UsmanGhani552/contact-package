<?php

use Illuminate\Support\Facades\Route;
use Usman\Contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'Usman\Contact\Http\Controllers'],function(){
    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'send']);
    
});

// Route::get('contact',function(){
//     return view('contact::contact');
// })->name('contact');

// Route::post('contact',function(Request $request){
//     return $request->all();
// })->name('contact');