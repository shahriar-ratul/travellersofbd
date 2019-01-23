<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripCommentReply extends Model
{
  protected $primaryKey = 'trip_comment_reply_id';

    public function userName(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
