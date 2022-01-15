<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Service extends Model
{
    //use softDeletes;
    protected $fillable = ['title','image','service_slug'];

    public function SubService()
    {
    	return $this->hasMany(SubService::class);
    }
}
