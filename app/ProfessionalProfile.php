<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalProfile extends Model
{

  protected $fillable = [
      'businessname', 'doctype', 'docnumber','taxstatus', 'comercialname', 'generalinfo', 'street', 'number', 'postalcode', 'phone', 'cellphone', 'user_id',
  ];

  public function category() {
    return $this->belongsTo('App\User');
  }
}
