<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrainsModel;

class LaravelTrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            $newTrain = new TrainsModel();
            $newTrain->azienda = $faker->words(5);
            $newTrain->stazione_di_partenza = $faker->words(10);
            $newTrain->stazione_di_arrivo = $faker->words(10);
            $newTrain->ora_di_arrivo = $faker->time();
            $newTrain->ora_di_partenza = $faker->time();
            $newTrain->codice_treno = $faker->bothify();
            $newTrain->n_carrozza = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();


        }
    }
}
