<?php

namespace App\Models;

use App\Models\Access\User\User;
use App\VoteQuestion;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table;

    public function groups(){
        return $this->belongsTo(Group::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function vote_questions(){
        return $this->hasMany(VoteQuestion::class);
    }
}
