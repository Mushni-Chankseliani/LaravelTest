<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  public $timestamps = true;
  public $table = 'classrooms';

  public function students()
  {
    return $this->hasMany(Student::class);
  }
}
