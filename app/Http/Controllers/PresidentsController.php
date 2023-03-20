<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;
use App\Http\Resources\PresidentResource;

class PresidentsController extends Controller
{
    public function getListOfPresidents()
    {
        return PresidentResource::collection(President::limit(100)->get());
    }
}
