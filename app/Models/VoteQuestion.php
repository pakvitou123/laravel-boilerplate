<?php

namespace App;

use App\Models\Access\User\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;

class VoteQuestion extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function questions(){
        return $this->belongsTo(Question::class);
    }
}
