<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
       protected $primaryKey = 'blog_id';

         public function userName(){
         return $this->belongsTo('\App\User','user_id','id');
       }
}
