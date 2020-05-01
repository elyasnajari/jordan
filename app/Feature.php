<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','description','lang','active','idparent','order','image'];

}
