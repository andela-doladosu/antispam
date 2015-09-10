<?php

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
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
        DB::table('notifications')->insert([
          'user_id' => $faker->numberBetween($min = 0, $max = 50),
          'content' => $faker->paragraph($nbSentences = 3)
        ]);
      }
    }
}
