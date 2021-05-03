<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class calendarOfAct extends Model
{
    protected $table = 'calendar_of_activities';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;


public function getFormattedDateAttribute(){
    return Carbon::parse($this->act_date)->format('F d, Y');
}

public function getFormattedDateMonthAttribute(){
    return Carbon::parse($this->act_date)->format('F');
}
}
