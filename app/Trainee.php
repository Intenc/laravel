<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function Users() {
        return $this->belongsTo('App\user');
    }
}
