<?php

use Illuminate\Database\Seeder;

class CodeReferralSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('code_referrals')->insert([
      'description'=>'Job site'
    ]);

    DB::table('code_referrals')->insert([
      'description'=>'Search engine e.g Google'
    ]);

    DB::table('code_referrals')->insert([
      'description'=>'Email solicitation'
    ]);


    DB::table('code_referrals')->insert([
      'description'=>'Other'
    ]);
  }
}
