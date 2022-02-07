<?php


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {

            $travel = new Travel();
            $travel->price = $faker->numberBetween(1000, 3000);
            $travel->starting_date = $faker->date();
            $travel->return_date = $faker->date();
            $travel->location = $faker->country();
            $travel->save();
        }

        
    }
}