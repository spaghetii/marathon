<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    protected $primaryKey = 'id';

    // public function events() {
    //     return $this->hasOne('App\Event', 'cityId','id');
    // }
    // public function events_to_eventContents() {
    //     return $this->hasManyThrough('App\EventContent','App\Event','cityId','eventId');
    // }
    // public function events_to_runs() {
    //     return $this->hasManyThrough('App\Run','App\Event','cityId','eventId');
    // }

}

