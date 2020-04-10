<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function category()
    {
        return $this->belongsTo('App\category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
