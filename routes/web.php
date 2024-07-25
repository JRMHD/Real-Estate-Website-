<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// files routes start

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('services', function () {
    return view('services');
});
Route::get('properties', function () {
    return view('properties');
});
Route::get('properties-single', function () {
    return view('properties-single');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('blog-single', function () {
    return view('blog-single');
});
Route::get('agent', function () {
    return view('agent');
});
Route::get('about', function () {
    return view('about');
});
Route::get('5B+DSQ', function () {
    return view('5B+DSQ');
});
Route::get('4B+DSQPLUS', function () {
    return view('4B+DSQPLUS');
});
Route::get('4B+DSQ', function () {
    return view('4B+DSQ');
});
Route::get('3B+DSQPLUS', function () {
    return view('3B+DSQPLUS');
});
Route::get('3B+DSQ', function () {
    return view('3B+DSQ');
});


// files routes end

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/enquiry', [App\Http\Controllers\EnquiryController::class, 'submit'])->name('enquiry.submit');


Route::get('/download-brochure', function() {
    return response()->download(public_path('images/Companyprofile.pdf'));
})->name('download.brochure');