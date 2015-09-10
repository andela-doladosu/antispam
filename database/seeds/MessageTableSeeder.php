<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
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
        DB::table('messages')->insert([
          'to' => $faker->numberBetween($min = 0, $max = 50),
          'from' => $faker->numberBetween($min = 0, $max = 50), 
          'content' => $faker->paragraph($nbSentences = 3)
        ]);
      }
    }
}
