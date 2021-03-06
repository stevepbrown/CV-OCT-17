<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

 protected $fillable = ['first_name','surname','email',
 'telephone','referral_source', 'description',];



   public function codeReferral(){

          return $this->hasOne(codeReferral::class);

   }

   public function getReferral(){

     return $this->codeReferral;
   }

   public function lkpReferral(){

     return codeReferral::all()->toArray();

   }


}
