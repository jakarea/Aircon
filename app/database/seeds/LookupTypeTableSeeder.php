<?php

class LookupTypeTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('lookup_type')->truncate();

		$lookup_types = array(
                  ['lookup_type_id' => 1, 'lookup_type' => 'Designation'],
                  ['lookup_type_id' => 2, 'lookup_type' => 'Department'],
                  ['lookup_type_id' => 3, 'lookup_type' => 'Payment mode'],
                  ['lookup_type_id' => 4, 'lookup_type' => 'Sex'],
                  ['lookup_type_id' => 5, 'lookup_type' => 'Marital status'],
                  ['lookup_type_id' => 6, 'lookup_type' => 'Type of employment'],
                  ['lookup_type_id' => 7, 'lookup_type' => 'Rate chart type'],
                  ['lookup_type_id' => 8, 'lookup_type' => 'Resignation type'],
                  ['lookup_type_id' => 9, 'lookup_type' => 'Party type'],
                  ['lookup_type_id' => 10, 'lookup_type' => 'Commission party type'],
                  ['lookup_type_id' => 11, 'lookup_type' => 'Country'],
                  ['lookup_type_id' => 12, 'lookup_type' => 'Service Provider'],
                  ['lookup_type_id' => 13, 'lookup_type' => 'Forwarding Service Provider'],
                  ['lookup_type_id' => 14, 'lookup_type' => 'Goods Type'], 
                  ['lookup_type_id' => 15, 'lookup_type' => 'Item Type'],
                  ['lookup_type_id' => 16, 'lookup_type' => 'Employe'],
                  ['lookup_type_id' => 17, 'lookup_type' => 'Collection Mode'],
                  ['lookup_type_id' => 18, 'lookup_type' => 'Bank Account Type'],      
                  ['lookup_type_id' => 19, 'lookup_type' => 'Invoice Against'],      
		);

		// Uncomment the below to run the seeder
		 DB::table('lookup_type')->insert($lookup_types);
	}

}
