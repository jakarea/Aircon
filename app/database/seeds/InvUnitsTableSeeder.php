<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvUnitsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('inv_units')->truncate();

		$unit_name = array(
                 ['unit_name'=>'Kg'],
                 ['unit_name' => 'PCS'],
                 ['unit_name' => 'Litter'],
                 ['unit_name' => 'Meater'],
		);

		// Uncomment the below to run the seeder
		 DB::table('inv_units')->insert($unit_name);
	}

}