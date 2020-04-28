<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','slug','keyword','description','lang','active','user_id','image'];
    public function user()
    {
       
        return $this->belongsTo(user::class);
    }
}
