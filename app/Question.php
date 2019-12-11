<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['body', 'option_a', 'option_b', 'option_c', 'option_d', 'correct', 'subject_id', 'category_id'];
}
