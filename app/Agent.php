<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['code','sex','name','name_shop','level','state','city','address','mob','tel','fax','active','lang','order','image'];
}
