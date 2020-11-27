<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = ['Product 01', 'Product 02', 'Product 03'];

        return $products;
    }
}
