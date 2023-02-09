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


    public function index()
    {
        $trending = $this->fetchTrendingMovies();
        $categories = $this->fetchCategories();
        // $topRated = $this->fetchTopRatedMovies();

        $mainImage = $this->GetBackdropTextOnHomepage($trending);

        return view('index', compact('mainImage', 'trending', 'categories'));
    }

    function GetBackdropTextOnHomepage($movies)
    {
        $show = $movies['results'][rand(0, count($movies) - 1)];

        return $show;
    }

    public function fetchTrendingMovies()
    {

        try {
            $timeWindow = "week";
            $response = Http::get("$this->apiUrl/trending/movie/$timeWindow", [
                'api_key' => $this->apiKey,
            ]);
            $movies = $response;
            if (!$response->failed()) {
                return $movies->json();
            } else {
                return view('error', ['error' => 'Unable To fetch Result']);
            }
        } catch (\Exception $e) {
            return view('error', ['error' => 'Unable To fetch Result']);
        }


    }

    public function fetchCategories()
    {
try{
        $response = Http::get($this->apiUrl . '/genre/movie/list', [
            'api_key' => $this->apiKey
        ]);

        $categories = $response;
        if (!$response->failed()) {
            return $categories->json();
        } else {
            return view('error', ['error' => 'Unable To fetch Result']);
        }
        
     } catch (\Exception $e) {
            return view('error', ['error' => 'Unable To fetch Result']);
        }

    }

    // public function fetchTopRatedMovies()
    // {
    //     $response = Http::get($this->apiUrl . '/movie/top_rated?', [
    //         'api_key' => $this->apiKey,
    //         'language' => 'en-US',
    //     'page' => 1,
    //     ]);
    //     $topRated = $response;
    //     return $topRated->json();
    // }
}