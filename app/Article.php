<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','slug','keyword','description','lang','active','user_id','image'];

    public function categories()
    {
       
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
       
        return $this->belongsTo(user::class);
    }
}
