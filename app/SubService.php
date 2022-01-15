<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SubService extends Model
{
   // use softDeletes;
    protected $fillable = ['title','sub_title','image','sub_service_slug'];

    public function Service()
    {
    	return $this->belongsTo(Service::class, 'service_id');
    }
}
