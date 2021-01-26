<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public $timestamps = true;
  public $table = 'students';

  public function classroom()
  {
    return $this->belongsTo(Classroom::class);
  }
}
