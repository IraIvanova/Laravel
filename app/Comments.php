<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function articles()
    {
        return $this->belongsTo(Articles::class);
    }
}
