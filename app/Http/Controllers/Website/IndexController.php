<?php

namespace App\Http\Controllers\Website;

use App\Place;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $comapnies = Company::latest()->take(3)->get();
        $places = Place::latest()->take(4)->get();

        return view('website.index' , [
            'companies' => $comapnies,
            'places' => $places
        ]);
    }

    public function companies()
    {
        $comapnies = Company::latest()->get();
        return view('website.companies' , [
            'companies' => $comapnies
        ]);
    }

    public function places()
    {
        $places = Place::latest()->get();
        return view('website.places' , [
            'places' => $places
        ]);
    }
}
