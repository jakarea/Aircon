<?php
use Faker\Factory as Faker;

class HrEmployeeTableSeeder extends Seeder {

	public function run()
	{
		HrEmployee::truncate();
		
		$faker = Faker::create();
		
		foreach(range(1, 20) as $index)
		{
			HrEmployee::create([
				'employee_name'  => $faker->name(),
				'department_id'  => $faker->numberBetween(1,4),
				'designation_id' => $faker->numberBetween(1,4),
				'card_no'		 => $faker->numberBetween(52423423,932423243),
				// 'picture'		 => $faker->image($dir = public_path()."/uploads", 200, 200),
				'joining_date' 	 => $faker->date(),
				'confirmation_date' => $faker->date(),
				// 'seperation_date' 	=> $faker->date()
			]);
		}
	}

}