<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Users()
    {
        return $this->belongsToMany(Users::class, 'User_Role');
    }
    public function Permission()
    {
        return $this->belongsToMany(Permission::class, 'Permission_Role');
    }
}
