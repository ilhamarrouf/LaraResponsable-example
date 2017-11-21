<?php

namespace App;

use App\Sale;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
