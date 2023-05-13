<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function powerofMarketResearch()
    {
        return view('pages.blogs.market-research');
    }
    public function onlineSurveys()
    {
        return view('pages.blogs.online-surveys');
    }
    public function panelMarketResearch()
    {
        return view('pages.blogs.panel-market-research');
    }
}
