<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalprofileCategory extends Model
{
  protected $table = 'professionalprofiles_categories';

  protected $fillable = [
      'professionalprofile_id', 'category_id', 'status',
  ];

  public function professionalprofile() {
    return $this->belongsTo('App\Professionalprofile');
  }

  public function category() {
    return $this->belongsTo('App\Category');
  }

}
