<?php

namespace App\Http\Responses;

use App\Product;
use Illuminate\Contracts\Support\Responsable;

class AdminProductSalesShowResponse implements Responsable
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function toResponse($request)
    {
        return view('admin.index', [
            'totalSales' => $this->totalSales(),
            'totalRevenue' => $this->totalRevenue(),
        ]);
    }

    protected function totalSales()
    {
        return $this->product->sales->count(); 
    }

    protected function totalRevenue()
    {
        return $this->product->sales->sum('total'); 
    }
}