<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuasiDrug extends Model
{
    protected $fillable = ['name', 'no_taxed_price'];

    public function products()
    {
        return $this->morphMany('App\Models\Product', 'product');
    }

    public function isReducedTaxRate()
    {
        return false;
    }
}
