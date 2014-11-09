<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TeachersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Teacher::create([
				'name' => $faker->firstName,
                'lastName' => $faker->lastName,
                'dob' => $faker->date(),
                'pob' => $faker->city,
                'gender' => $faker->word,
                'email' => $faker->email,
                'password' => Hash::make('buffer'),
                'grade' => $faker->word,
			]);
		}
	}

}