<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class LaravelTrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->ora_di_arrivo = $faker->time();
            $newTrain->ora_di_partenza = $faker->time();
            $newTrain->codice_treno = $faker->bothify();
            $newTrain->n_carrozza = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data_di_partenza=$faker->date(); 
            // dd($newTrain);
            $newTrain->save();
        }
    }
}
