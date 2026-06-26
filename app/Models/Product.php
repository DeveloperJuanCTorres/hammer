<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
