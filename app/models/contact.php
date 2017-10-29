<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

 protected $fillable = ['first_name','surname','email',
 'telephone','referral_source', 'description',];


// These are the attributes that will determine which bootstrap classes are used in the blade
protected $contactAttributes [



]


   public function codeReferral(){

          return $this->hasOne(codeReferral::class);

   }

   public function lkpReferral(){

     return $this->codeReferral;
   }


}
