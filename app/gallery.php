<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
