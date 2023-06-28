<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutImage extends Model
{
    use HasFactory;
    protected $fillable = ['about_id','creator_id','updator_id','name'];
}
