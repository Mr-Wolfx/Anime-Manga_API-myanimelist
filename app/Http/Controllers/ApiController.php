<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function genres() {
        $genres = Http::get('https://api.jikan.moe/v4/genres/anime')->json()['data'];

        return response($genres);
    }
}
