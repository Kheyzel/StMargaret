<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    protected $table = 'organization';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $timestamp = false;

}
