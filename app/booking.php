<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = ['user_id', 'start_booking', 'eind_booking'];
}
