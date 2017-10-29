<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class codeReferral extends Model
{

  protected $fillable = ['description',];

  public function contact(){

    return $this->belongsTo(contact::class);
  }

}
