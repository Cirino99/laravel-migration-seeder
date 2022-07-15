<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Train;

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
            $newtrain = new Train();
            $newtrain['Azienda'] = $faker->company();
            $newtrain['Stazione di partenza'] = $faker->city();
            $newtrain['Stazione di arrivo'] = $faker->city();
            $newtrain['Orario di partenza'] = $faker->time();
            $newtrain['Orario di arrivo'] = $faker->time();
            $newtrain['Codice Treno'] = $faker->postcode();
            $newtrain['Numero Carrozze'] = random_int(1, 10);
            $newtrain['In orario'] = random_int(0, 1);
            $newtrain['Cancellato'] = random_int(0, 1);
            $newtrain->save();
        }
    }
}
