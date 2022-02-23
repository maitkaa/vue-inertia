<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public static function getShowByIMDBId(){
        $response = Http::get('https://eztv.re/api/get-torrents');
        return $response;
    }
}
