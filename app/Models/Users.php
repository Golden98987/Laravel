<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    public $timestamps = false;
    
    public function Gender()
    {
        return $this->belongsTo('App\Models\Gender','gender_id','id');
    }

    public function Kala()
    {
        return $this->belongsToMany(Kala::class, 'basket');
    }

    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Address()
    {
        return $this->hasMany('App\Models\Address');
    }
    
    public function Role()
    {
        return $this->belongsToMany(Role::class, 'User_Role');
    }
    
}
