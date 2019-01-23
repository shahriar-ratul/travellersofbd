<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateTrip extends Model
{
     protected $primaryKey = 'trip_id';

     public function userName(){
     return $this->belongsTo('\App\User','user_id','id');
   }
}
