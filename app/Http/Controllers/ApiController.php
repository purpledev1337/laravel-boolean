<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class ApiController extends Controller
{
    
    public function getPostcards() {

        $postcards = Postcard::orderBy('id', 'desc') -> get();

        return json_encode($postcards);
    }
}
