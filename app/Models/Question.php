<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function groups(){
        return $this->belongsTo(Group::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
