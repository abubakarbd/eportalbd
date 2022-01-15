<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['client_id'];

    public function Client()
    {
    	return $this->belongsTo(Client::class, 'client_id');
    }
}
