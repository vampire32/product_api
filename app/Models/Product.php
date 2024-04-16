<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public function reviews(){
        return $this->hasMany('App\Review');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }
}
