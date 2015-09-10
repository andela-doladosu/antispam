<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  { 
    $faker = Faker\Factory::create();
    for($i = 0; $i < 50; $i++){
      DB::table('users')->insert([
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => $faker->password,
      ]);
    }
  }
}
