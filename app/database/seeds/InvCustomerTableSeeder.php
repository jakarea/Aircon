<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvCustomerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		InvCustomer::truncate();
		

		foreach(range(1, 50) as $index)
		{
			InvCustomer::create([
                "customer_name" => $faker->name(),
                "customer_address" => $faker->address(),
                "contact_person" => $faker->name(),
                "contact_person_mobile_no" => $faker->phoneNumber(),
                "customer_email_address" => $faker->email(),
                "letter_head" => $faker->suffix(),
                "fsc_rate_percentage" => $faker->randomNumber(1)
			]);
		}
	}

}