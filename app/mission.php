<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    protected $table = 'mission';
    protected $primaryKey = 'ID';
    protected $guarded = [];
    protected $timestamp = false;
}
