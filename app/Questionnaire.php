<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = ['grade', 'questions', 'correct', 'incorrect', 'unanswered', 'user_id', 'subject_id', 'catedory_id'];
}
