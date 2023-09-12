<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();
        //
        for ($i = 0; $i < 20; $i++){
            $train = new Train();
            $train->company = fake()->word();
            $train->departure_station = fake()->words(3, true);
            $train->arrival_station = fake()->words(3, true);
            $train->departure_time = fake()->dateTime();
            $train->arrival_time = fake()->dateTime();
            $train->train_code = fake()->randomNumber(8, true);
            $train->car_number = fake()->numberBetween(4, 12);
            $train->on_time = fake()->boolean();
            $train->cancelled = fake()->boolean();
            $train->save();
        }

    }
};
