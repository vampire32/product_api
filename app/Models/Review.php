<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

  
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
