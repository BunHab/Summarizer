<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SummarizationController extends Controller
{
    public function summary(Request $request)
    {
        $article = $request->input('article');

    $response = Http::post('http://127.0.0.1:5000/summary', [
        'article' => $article
    ]);

    if ($response->ok()) {
        $result = $response->json('result');
    } else {
        $result = 'Error: Unable to fetch the summary.';
    }

    return $result;
    }
}
