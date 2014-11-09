<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Course::create([
				'courseName' => $faker->word,
				'courseStart' => $faker->time($format = 'H:i', $max = 'now'),
				'courseEnd' => $faker->time($format = 'H:i', $max = 'now'),
				'section_id' => rand(1,9)
			]);
		}
	}

}