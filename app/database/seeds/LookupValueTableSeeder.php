<?php

class LookupValueTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('lookup_value')->truncate();

		$lookup_type_values = array(
                  ['lookup_value_id'=>1,'lookup_type_id' => 1, 'lookup_value' => 'Programmer'], 
                  ['lookup_value_id'=>2,'lookup_type_id' => 1, 'lookup_value' => 'Manager'], 

                  ['lookup_value_id'=>3,'lookup_type_id' => 2, 'lookup_value' => 'Software'], 
                  ['lookup_value_id'=>4,'lookup_type_id' => 2, 'lookup_value' => 'Marketing'], 
                

                  ['lookup_value_id'=>5,'lookup_type_id' => 3, 'lookup_value' => 'Bank'], 
                  ['lookup_value_id'=>6,'lookup_type_id' => 3, 'lookup_value' => 'Cash'], 
                
                  ['lookup_value_id'=>7,'lookup_type_id' => 4, 'lookup_value' => 'Male'], 
                  ['lookup_value_id'=>8,'lookup_type_id' => 4, 'lookup_value' => 'Female'], 
                  ['lookup_value_id'=>9,'lookup_type_id' => 4, 'lookup_value' => 'Other'],
                   
                  ['lookup_value_id'=>10,'lookup_type_id' => 5, 'lookup_value' => 'Single'],
                  ['lookup_value_id'=>11,'lookup_type_id' => 5, 'lookup_value' => 'Married'],

                  ['lookup_value_id'=>12,'lookup_type_id' => 6, 'lookup_value' => 'Probationary'],
                  ['lookup_value_id'=>13,'lookup_type_id' => 6, 'lookup_value' => 'Regular'],

                  //rate chart type
                  ['lookup_value_id'=>14,'lookup_type_id' => 7, 'lookup_value' => 'Standard'],
                  ['lookup_value_id'=>15,'lookup_type_id' => 7, 'lookup_value' => 'Customized'],

                  ['lookup_value_id'=>16,'lookup_type_id' => 8, 'lookup_value' => 'Resigned'],
                  ['lookup_value_id'=>17,'lookup_type_id' => 8, 'lookup_value' => 'Terminated'],
                  ['lookup_value_id'=>18,'lookup_type_id' => 8, 'lookup_value' => 'Dismissed'],
                  ['lookup_value_id'=>19,'lookup_type_id' => 8, 'lookup_value' => 'Suspended'],
                  ['lookup_value_id'=>20,'lookup_type_id' => 8, 'lookup_value' => 'Death'],
                  ['lookup_value_id'=>21,'lookup_type_id' => 8, 'lookup_value' => 'Not Resigned'],

                  //party type
                  ['lookup_value_id'=>22,'lookup_type_id' => 9, 'lookup_value' => 'Bank'],
                  ['lookup_value_id'=>23,'lookup_type_id' => 9, 'lookup_value' => 'Private'],
                  ['lookup_value_id'=>24,'lookup_type_id' => 9, 'lookup_value' => 'Insurance'],
                  ['lookup_value_id'=>25,'lookup_type_id' => 9, 'lookup_value' => 'Individual'],

                  //commission party type
                  ['lookup_value_id'=>26,'lookup_type_id' => 10, 'lookup_value' => 'Agent'],
                  ['lookup_value_id'=>27,'lookup_type_id' => 10, 'lookup_value' => 'Employee'],
                  ['lookup_value_id'=>28,'lookup_type_id' => 10, 'lookup_value' => 'Both'],
                  ['lookup_value_id'=>29,'lookup_type_id' => 10, 'lookup_value' => 'N/A'],
                    
                  //country
                  ['lookup_value_id'=>30,'lookup_type_id' => 11, 'lookup_value' => 'USA'],
                  ['lookup_value_id'=>31,'lookup_type_id' => 11, 'lookup_value' => 'UK'],
                  ['lookup_value_id'=>32,'lookup_type_id' => 11, 'lookup_value' => 'BD'],
                  ['lookup_value_id'=>33,'lookup_type_id' => 11, 'lookup_value' => 'IN'],
                  
                  //service provider
                  ['lookup_value_id'=>34,'lookup_type_id' => 12, 'lookup_value' => 'DHL'],
                  ['lookup_value_id'=>35,'lookup_type_id' => 12, 'lookup_value' => 'Aramex'],
                  ['lookup_value_id'=>36,'lookup_type_id' => 12, 'lookup_value' => 'Skynet'],
                  ['lookup_value_id'=>37,'lookup_type_id' => 12, 'lookup_value' => 'Citynet'],
                    
                  //forwarding service provider
                  ['lookup_value_id'=>38,'lookup_type_id' => 13, 'lookup_value' => 'DHL'],
                  ['lookup_value_id'=>39,'lookup_type_id' => 13, 'lookup_value' => 'Aramex'],
                  ['lookup_value_id'=>40,'lookup_type_id' => 13, 'lookup_value' => 'Skynet'],
                  ['lookup_value_id'=>41,'lookup_type_id' => 13, 'lookup_value' => 'Citynet'],
                  //goods type
                  ['lookup_value_id'=>42,'lookup_type_id' => 14, 'lookup_value' => 'DOX'],
                  ['lookup_value_id'=>43,'lookup_type_id' => 14, 'lookup_value' => 'WPX'],
                  ['lookup_value_id'=>44,'lookup_type_id' => 14, 'lookup_value' => 'Skynet'],
                  ['lookup_value_id'=>45,'lookup_type_id' => 14, 'lookup_value' => 'Citynet'],
                  //item type
                  ['lookup_value_id'=>46,'lookup_type_id' => 15, 'lookup_value' => 'Assets'],
                  ['lookup_value_id'=>47,'lookup_type_id' => 15, 'lookup_value' => 'Inventory'],
                  ['lookup_value_id'=>48,'lookup_type_id' => 15, 'lookup_value' => 'Expenses'],
                  //employee
                  ['lookup_value_id'=>49,'lookup_type_id' => 16, 'lookup_value' => 'Jaman'],
                  ['lookup_value_id'=>50,'lookup_type_id' => 16, 'lookup_value' => 'kamal'],
                  ['lookup_value_id'=>51,'lookup_type_id' => 16, 'lookup_value' => 'Imaran'],
                  //payment type
                  ['lookup_value_id'=>52,'lookup_type_id' => 17, 'lookup_value' => 'Cash'],
                  ['lookup_value_id'=>53,'lookup_type_id' => 17, 'lookup_value' => 'Credit'],
                  ['lookup_value_id'=>54,'lookup_type_id' => 17, 'lookup_value' => 'Bkash'],
                  //Bank Account Type
                  ['lookup_value_id'=>55,'lookup_type_id' => 18, 'lookup_value' => 'Current'],
                  ['lookup_value_id'=>56,'lookup_type_id' => 18, 'lookup_value' => 'Std'],                  
		);

		// Uncomment  the below to run the seeder
		 DB::table('lookup_value')->insert($lookup_type_values);
	}

}
