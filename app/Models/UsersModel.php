<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    
    public function reactie()
    {
        return $this->hasMany('App\Models\UsersModel', 'user_id');
    }

    public function helpdesk()
    {
        return $this->hasMany('App\Models\UsersModel', 'user_id');
    }
}
