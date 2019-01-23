<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
  protected $primaryKey = 'comment_id';

    public function userName(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
