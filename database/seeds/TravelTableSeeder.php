<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //p
            $new_travel = new Travel();
            $new_travel->locations = 'Francia';
            $new_travel->type = 'Vacanza di Mare';
            $new_travel->date = '2018-06-12';
            $new_travel->duration = 21;
            $new_travel->hotels = 'Hilton, Da Gino';
            $new_travel->price = 10000;
            $new_travel->number_of_children = 3;
            $new_travel->description = 'Vacanza di Mare in Francia con gita a Parigi';
            $new_travel->save();

    }
}
