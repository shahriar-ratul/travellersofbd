<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $primaryKey = 'post_id';

    public function userName(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
