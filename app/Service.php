<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Service extends Model
{
  protected $fillable = [
      'name', 'photo', 'status','category_id'
  ];

  public function category() {
  return $this->belongsTo(Category::class, 'category_id');
  }
}
