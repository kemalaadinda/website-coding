<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SortingController;
use App\Http\Controllers\LiveCodingController;

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

Route::post('/sort', [SortingController::class, 'sort']);
Route::get('/live-coding', [LiveCodingController::class, 'index']);
Route::post('/execute', [LiveCodingController::class, 'execute']);


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/silabus', function () {
    return view('silabus', [
        "title" => "Course"
    ]);
});

Route::get('/library', function () {
    return view('library', [
        "title" => "Library"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/silabus2', function () {
    return view('silabus2', [
        "title" => "Syllabus"
    ]);
});

Route::get('/library2', function () {
    return view('library2', [
        "title" => "Library"
    ]);
});

Route::get('/coding', function () {
    return view('livecoding', [
        "title" => "Live Coding"
    ]);
});

Route::post('/run-code', function (Request $request) {
    $code = $request->input('code');

    // Tulis kode ke dalam file temporer
    $filename = tempnam(sys_get_temp_dir(), 'code') . '.php';
    file_put_contents($filename, $code);

    // Jalankan kode PHP dan tangkap output
    ob_start();
    try {
        include($filename);
        $output = ob_get_clean();
    } catch (\Throwable $e) {
        $output = $e->getMessage();
    }

    // Hapus file temporer
    unlink($filename);

    return response()->json(['output' => $output]);
});



