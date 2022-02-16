<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index() {

        return view('pages.home');
    }

    public function createPostcard() {
        
        return view('pages.create');
    }

    public function storePostcard(Request $request) {

        $data = $request -> validate([

            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|file'
        ]);

        $imageFile = $request -> file('image');
        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile -> getClientOriginalExtension();
        $imageFile -> storeAs('/postcards/', $imageName, 'public');

        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
