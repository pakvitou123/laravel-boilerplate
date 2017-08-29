<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
}
