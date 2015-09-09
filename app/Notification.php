<?php

namespace Antispam;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
  public function user() {
    return $this->belongsTo('Antispam\User');
  }
}
