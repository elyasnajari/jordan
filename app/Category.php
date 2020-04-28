<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','slug','order','active','lang'];
 
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
