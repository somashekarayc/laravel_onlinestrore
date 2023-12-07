<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

        public function index()
        {
        $vData = [];
        $vData["title"] = "Products - Online Store";
        $vData["subtitle"] = "List of products";
        $vData["products"] = Product::get();
        return view('product.index')->with("viewData", $vData);
        }
        public function show($id)
        {
        $vData = [];
        $product = Product::findOrFail($id);
        $vData["title"] = $product->getName()." - Online Store";
        $vData["subtitle"] = $product->getName()." - Product information";
        $vData["product"] = $product;
        return view('product.show')->with("viewData", $vData);
        }
}
