<?php

namespace App\Http\Controllers;

use App\Http\Responses\AdminProductSalesIndexResponse;
use App\Http\Responses\AdminProductSalesShowResponse;
use App\Product;
use App\Sale;
use Illuminate\Http\Request;

class AdminProductSalesController extends Controller
{
    public function index()
    {
        return new AdminProductSalesIndexResponse();
    }

    public function show(Product $product)
    {
        return new AdminProductSalesShowResponse($product);
    }
}
