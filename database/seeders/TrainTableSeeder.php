<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Azienda' => '',
                'Stazione di partenza' => '',
                'Stazione di arrivo' => '',
                'Orario di partenza' => '',
                'Orario di arrivo' => '',
                'Codice Treno' => '',
                'Numero Carrozze' => '',
                'In orario' => '',
                'Cancellato' => ''
            ],
        ];
        foreach($data as $trains){
        $newTrain = new TrainTableSeeder();
        $newTrain->Azienda = $trains['Azienda'];
        $newTrain->save();
        }
    }
}
