<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReactieModel extends Model
{
    Protected $table = 'Reactie';

    public function users()
    {
        return $this->belongsTo('App\Models\UsersModel', 'user_id');
    }
    
    public function Helpdesk()
    {
        return $this->belongsTo('App\Models\HelpdeskModel', 'aanvraag_id');
    }
}
