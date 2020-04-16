<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterDsmBlock extends Model
{
    //

    protected $fillable = [
        'id', 'start_time', 'end_time'
    ];
}
