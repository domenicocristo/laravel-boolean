<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home() {
        $postcards = Postcard::all();

        return view('pages.home', compact('postcards'));
    }

    public function create() {
        $postcards = Postcard::all();
        
        return view('pages.create', compact('postcards'));
    }

    public function store(Request $request) {
        $data = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
        ]);

        $imageFile = $request->file('image');
        $imageName = rand(100000,999999) . '_' . time() . '.' . $imageFile->getClientOriginalName();
        $imageFile->storeAs('/asset/', $imageName, 'public');
        $data['image'] = $imageName;
        Postcard::create($data);

        return redirect()->route('home');
    }
}