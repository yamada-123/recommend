<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    public function category()
    {
        return $this->belongsTo('App\category');
    }
}
