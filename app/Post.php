<?php

namespace Antispam;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
  public function user() {
    return $this->belongsTo('Antispam\User');
  }

  public function comments() {
    return $this->hasMany('Antispam\Comment');
  }
}
