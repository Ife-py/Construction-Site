<?php
use App\Http\Controllers\construction\construction;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
// Route::get('/about_us', function() {
//     return view('about_us');
// });

Route::get('/',[construction::class,'index'])->name('index');

Route::get('/services',[construction::class,'services'])->name('services');

Route::get('/contact_us',[construction::class,'contact_us'])->name('contact_us');

Route::get('/about_us',[construction::class,'about_us'])->name('about_us');
