<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpdeskModel extends Model
{
    Protected $table = 'Helpdesk';
    
    public function users()
    {
        return $this->belongsTo('App\Models\UsersModel', 'user_id');
    }
    public function reactie()
    {
        return $this->hasMany('App\Models\ReactieModel', 'aanvraag_id');
    }
}
