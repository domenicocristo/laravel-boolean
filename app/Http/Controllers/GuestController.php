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
}