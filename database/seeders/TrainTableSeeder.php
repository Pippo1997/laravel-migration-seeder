<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importo faker
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++){

            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain->Stazione_di_partenza = $faker->word();
            $newTrain->Stazione_di_arrivo = $faker->word();
            $newTrain->Orario_di_partenza = $faker->numberBetween(10, 20);
            $newTrain->Orario_di_arrivo = $faker->numberBetween(10, 20);
            $newTrain->Codice_Treno = $faker->numberBetween(4, 10);
            $newTrain->Numero_Carrozze = $faker->numberBetween(1, 40);
            $newTrain->In_orario = $faker->randomElement([true,false]);
            $newTrain->Cancellato = $faker->randomNumber(true,false);

            $newTrain->save();
        }
    }
}
