<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function listRandomBreedImages()
    {
        $apiUrl = 'https://dog.ceo/api/breed/%s/images/random/%s';
    }
}
