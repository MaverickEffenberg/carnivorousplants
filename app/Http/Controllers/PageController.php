<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Show featured plants on homepage
        $plants = Plant::where('isAvailable', true)
            ->take(6)
            ->get();

        return view('home', compact('plants'));
    }

    public function about()
    {
        return view('about');
    }
}
