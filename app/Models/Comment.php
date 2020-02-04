<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\Models\Users');
    }
    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }
}
