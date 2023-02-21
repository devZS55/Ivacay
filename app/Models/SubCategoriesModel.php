<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategoriesModel extends Model
{

    protected $table= "sub_categories";
    use HasFactory;
    public function getcategories(): BelongsTo
    {
        return $this->belongsTo(CategoriesModel::class, 'parent_category','id');
    }
}
