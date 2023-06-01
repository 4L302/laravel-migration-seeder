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
            $newTrain -> Azienda = '';
            $newTrain -> Stazione_di_partenza = '';
            $newTrain -> Stazione_di_arrivo = '';
            $newTrain -> Orario_di_partenza = '';
            $newTrain -> Orario_di_arrivo = '';
            $newTrain -> Codice_Treno = '';
            $newTrain -> Numero_Carrozze = '';
            $newTrain -> In_orario = '';
            $newTrain -> Cancellato = '';
            $newTrain->save();
        }
    }
}
