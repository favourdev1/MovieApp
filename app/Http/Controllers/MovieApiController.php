<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieApiController extends Controller
{

    private $apiKey;
    private $apiUrl;


    public function __construct()
    {


        $this->apiKey = config('services.tmdb.api_key');
        $this->apiUrl = config('services.tmdb.api_url');

    }

    public function fetchTrendingMovies()
    {

        $timeWindow = "week";
        $response = Http::get("$this->apiUrl/genre/movie/list", [
            'api_key' => $this->apiKey,
        ]);

        $movies = $response->json();

        return response()->json(['json'=>$movies]);
        // return view('/', compact($movies));

    }

    public function fetchCategories()
    {
        $response = Http::get($this->apiUrl . '/genre/', [
            'api_key' => $this->apiKey
        ]);

        $categories= $response->json();
        return response()->json(['$categories']);
    }
}