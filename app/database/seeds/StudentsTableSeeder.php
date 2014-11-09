<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Student::create([
                'name' => $faker->firstName,
                'lastName' => $faker->lastName,
                'dob' => $faker->date(),
                'pob' => $faker->city,
                'gender' => $faker->word,
                'email' => $faker->email,
                'password' => Hash::make('buffer'),
                'level' => 'L'.$faker->randomNumber(1),
                'option' => $faker->word,
                'section' => $faker->randomNumber(1),
                'group' => $faker->randomNumber(2),
                'subGroup' => $faker->randomNumber(2)


			]);
		}
	}

}