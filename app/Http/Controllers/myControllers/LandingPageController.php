<?php

namespace App\Http\Controllers\myControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function master()
    {
        return view('landingPage.master');
    }
    function about()
    {
        return view('landingPage.about');
    }
    function features()
    {
        return view('landingPage.features');
    }
    function services()
    {
        return view('landingPage.services');
    }
    function portfolio()
    {
        return view('landingPage.portfolio');
    }
    function contact()
    {
        return view('landingPage.contact');
    }
}
