<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
{
$vData = [];
$vData["title"] = "Admin Page - Products - Online Store";
$vData["products"] = Product::get();
return view('admin.product.index')->with("vData", $vData);
}
}
