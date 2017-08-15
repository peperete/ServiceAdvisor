<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'categories';

  protected $fillable = [
      'name', 'photo', 'status'
  ];

  public function services()
  {
    return $this->hasMany('App\Service');
  }

  public function professionalprofiles(){
    return $this->belongsToMany('App\Professionalprofiles', 'professionalprofiles_categories');
  }


}
