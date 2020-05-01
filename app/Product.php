<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code','name','collection','special','reed','density',
    'style','texture','yarn','pile','ncolor','weight','price','offprice','tag',
    'benefit','fault','image','decor','description','lang','active','user','order'];
}
