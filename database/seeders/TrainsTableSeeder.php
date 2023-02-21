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
        for($i=0; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(3, true);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
