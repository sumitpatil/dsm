<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterUnitStageCapacity extends Model
{
    //
    protected $fillable = [
        'unit_name', 'stage_name', 'capacity_name', 'status'
    ];
}
