<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    //use softDeletes;
    protected $fillable = ['price','title','sub_title','desc','image','product_slug'];
}
