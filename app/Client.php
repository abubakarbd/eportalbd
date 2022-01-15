<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Client extends Model
{
    //use softDeletes;
    protected $fillable = ['name','mobile','service','brand_slug'];

    public function Work()
    {
    	return $this->hasMany(Work::class);
    }
}
