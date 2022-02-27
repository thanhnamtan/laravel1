<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table = "product_models";
    protected $guarded = [];

    public function images_links()
    {
        return $this->hasMany(product_images::class, "product_id");
    }

    public function product_category()
    {
        return $this->hasMany(product_category::class, "product_id");
    }
}
