<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selected extends Model
{
    protected $fillable = ['question_id', 'event_id'];
}
