<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
      'name', 'photo', 'status','category_id'
  ];
}
