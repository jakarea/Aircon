<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BillReceiveTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		BillReceive::truncate();
		foreach(range(1, 10) as $index)
		{
			BillReceive::create([
				'bill_submit_date' => $faker->date(),
				'invoice_from' => $faker->date(),
				'invoice_to' => $faker->date(),
				'received_by' => mt_rand(1,10),
				'auto_invoice_no' => mt_rand(10000,1000000),

				'invoice_against_lv_id' => mt_rand(1,10),

				'supplier_invoice_no' => mt_rand(10000,100000000),
				'supplier_id' => mt_rand(1,10),

				'service_provider_invoice_no' => mt_rand(100000,10000000000),
				'service_provider_id' => mt_rand(1,10),

				'work_order_amount' => mt_rand(1000,100000),

				'already_paid' => mt_rand(1000,10000),
				'dues_amount' => mt_rand(1000,10000),
				'payable_amount' => mt_rand(1000,10000),
				'invoice_amount' => mt_rand(1000,10000)
			]);
		}

		BillReceive::create([
			'bill_submit_date' => $faker->date(),
			'invoice_from' => $faker->date(),
			'invoice_to' => $faker->date(),
			'received_by' => mt_rand(1,10),
			'auto_invoice_no' => mt_rand(10000,1000000),

			'service_provider_invoice_no' => 111112,
			'service_provider_id' => 51,

			'dues_amount' => 0,
			'invoice_amount' => 50000,
			'payable_amount' => 50000,
		]);

		BillReceive::create([
			'bill_submit_date' => $faker->date(),
			'invoice_from' => $faker->date(),
			'invoice_to' => $faker->date(),
			'received_by' => mt_rand(1,10),
			'auto_invoice_no' => mt_rand(10000,1000000),

			'service_provider_invoice_no' => 111113,
			'service_provider_id' => 51,

			'dues_amount' => 50000,
			'invoice_amount' => 50000,
			'payable_amount' => 100000,
		]);
	}

}
