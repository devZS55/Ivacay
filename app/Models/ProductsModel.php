<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImageModel;

class ProductsModel extends Model
{
    protected $table= "products";
    use HasFactory;
    public function images_take1()
    {
        return $this->hasOne(ProductImageModel::class, 'product_id','id');
    }
}
