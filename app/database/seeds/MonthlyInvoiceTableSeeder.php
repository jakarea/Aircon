<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MonthlyInvoiceTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			MonthlyInvoice::create([
				'invoice_no' => mt_rand(11111, 99999),
				'invoice_date' => $faker->date(),
				'billing_month' => mt_rand(1, 12),
				'billing_year' => mt_rand(2000, 2015),
				'customer_id' => mt_rand(1, 10),
				'marketing_employee_id' => mt_rand(1, 10),
				'invoice_amount' => mt_rand(11111, 99999),
				'previous_dues' => mt_rand(11111, 99999),
				'total_payable_amount' => mt_rand(11111, 99999)
			]);
		}
	}

}