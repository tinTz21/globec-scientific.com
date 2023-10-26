<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','creator_id','updator_id','deleted_at'];

    public function subCategory(){
        return $this->hasMany('\App\Models\ProductSubCategory','product_categories_id');
    }
}