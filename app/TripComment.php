<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripComment extends Model
{
  protected $primaryKey = 'trip_comment_id';

    public function userName(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
