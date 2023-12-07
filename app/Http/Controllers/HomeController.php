<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vData = [];
        $vData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $vData);
    }
    public function about()
    {
        $vData = [];
        $vData["title"] = "About us - Online Store";
        $vData["subtitle"] = "About us";
        $vData["description"] = "This is an about page ...";
        $vData["author"] = "Developed by: som";
        return view('home.about')->with("viewData", $vData);
    }
}
