<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Notice extends Model
{
    //use softDeletes;
    protected $fillable = ['title','notice','notice_slug'];
}
