<?php

namespace App\Http\Controllers;

use App\Models\HomeSlide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // fetch slide information for home page
        $data['home_slide'] = HomeSlide::find(1);


        return view('frontend.index', $data);
    }
}
