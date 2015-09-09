<?php

namespace Antispam;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
  public function user() {
    return $this->belongsTo('Antispam\User');
  }
}
