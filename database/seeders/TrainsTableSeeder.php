<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->train_track = $faker->numberBetween(1, 20);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->unique()->bothify('?#-?#');
            $newTrain->carriages_count = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->canceled = $faker->numberBetween(0, 1);

            $newTrain->save();
        }
    }
}
