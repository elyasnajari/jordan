<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catgallery extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','slug','order','image','active','lang'];
}
