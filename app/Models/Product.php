<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
  
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // cerca de producte per nom

    public function scopeName($query, $name){
        if ($name)
            return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeBrand($query, $brand){
        if ($brand)
            return $query->where('brand_id', 'LIKE', "%$brand%");
    }
}
