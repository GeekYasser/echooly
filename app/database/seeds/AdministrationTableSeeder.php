<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdministrationTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Administration::create([
				"name" => "Sari",
				"lastName" => "Zaki",
				"username" => "chefdep",
				"password" => Hash::make('buffer')
			]);
		}
	}

}