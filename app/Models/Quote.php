<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product; 

class Quote extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','email','phone','institution','position','country','region','description','creator_id','updator_id','deleted_at','product_id','status'];

    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
