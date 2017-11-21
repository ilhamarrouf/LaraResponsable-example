<?php

namespace App\Http\Responses;

use App\Sale;
use Illuminate\Contracts\Support\Responsable;

class AdminProductSalesIndexResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('admin.index', [
            'totalSales' => $this->totalSales(),
            'totalRevenue' => $this->totalRevenue(),
        ]);
    }

    protected function totalSales()
    {
        return Sale::count();
    }

    protected function totalRevenue()
    {
        return Sale::sum('total');
    }
}