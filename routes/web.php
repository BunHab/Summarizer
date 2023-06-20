<?php

use App\Http\Controllers\SummarizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    return view('summarizer');
});


Route::post('/summary', [SummarizationController::class, 'summary'])->name('summary');

// Route::post('/test', function (Request $request) {
//     $article = $request->input('article');

//     $response = Http::post('http://127.0.0.1:5000/summary', [
//         'article' => $article
//     ]);

//     if ($response->ok()) {
//         $result = $response->json('result');
//     } else {
//         $result = 'Error: Unable to fetch the summary.';
//     }

//     return view('welcome', compact('result'));
// })->name('summary');

