<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'responce_time', 'open_date', 'close_date', 'professor_id', 'category_id'];
}
