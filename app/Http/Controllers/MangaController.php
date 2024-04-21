<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function genres() {
        $genres = Http::get('https://api.jikan.moe/v4/genres/manga')->json()['data'];

        return view('manga.genres', compact('genres'));

    }

    public function index($genre_id) {
        $mangas = Http::get('https://api.jikan.moe/v4/manga?genres=' . $genre_id)->json()['data'];
        
        $mangas = Http::get('https://api.jikan.moe/v4/manga', ['genres'=>$genre_id])->json()['data'];

        $mangas = Arr::map($mangas, function($manga){
            return[
                'id' => $manga['mal_id'],
                'image' => $manga['images']['webp']['large_image_url'],
                'title' => $manga['title'],
                'description' => $manga['synopsis'],
                'year' => $manga['published']['string']
            ];
        });

        return view('manga.index', compact('mangas'));
    }
}
