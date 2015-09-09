<?php

namespace Antispam;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    //
  public function user() {
    return $this->belongsTo('Antispam\User');
  }
  
  public function post() {
    return $this->belongsTo('Antispam\Post');
  }
}
