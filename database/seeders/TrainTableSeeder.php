<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Trains;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i ++){
            $newTrain = new Train();
            $newTrain -> Azienda = $faker->name();
            $newTrain -> Stazione_di_partenza = $faker->city();
            $newTrain -> Stazione_di_arrivo = $faker->city();
            $newTrain -> Orario_di_partenza = $faker->time();
            $newTrain -> Orario_di_arrivo = $faker->time();
            $newTrain -> Codice_Treno = $faker->;
            $newTrain -> Numero_Carrozze = $faker->randomDigitNotNull();
            $newTrain -> In_orario = $faker->boolean();
            $newTrain -> Cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
