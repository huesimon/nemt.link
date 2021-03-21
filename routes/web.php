<?php

use App\Http\Controllers\ShortLinkController;
use App\Models\PhotoUpload;
use App\Models\TextToSpeech;
use App\Notifications\ImageUploaded;
use Illuminate\Support\Facades\Route;

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
    return view('link.welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/text/{id}', function ($id) {
    $text = TextToSpeech::find($id);
    $text->published_at = now();
    $text->save();
    dd($text);
});

Route::get('/image/{id}', function ($id) {
    $image = PhotoUpload::find($id);
    $image->published_at = now();
    $image->save();
    dd($image);
});

Route::get('/dashboard', function () {
    return view('home-control.index');
})->middleware(['auth']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::resources([
    'links' => ShortLinkController::class
]);
