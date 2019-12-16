<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'responce_time', 'open_date', 'close_date', 'admin_id'];
}
