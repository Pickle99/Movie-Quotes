<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('movies')->insert(
			[[
				'name'  => '{"name_en":"Perfume: The Story of a Murderer","name_ka":"პარფიუმერი: ერთი მკვლელის ისტორია"}',
				'image' => 'images/parfumer.jpg',
			],
				[
					'name'  => '{"name_en":"Breaking Bad","name_ka":"მძიმე დანაშაული"}',
					'image' => 'images/breakingbad.jpg',
				],
				[
					'name'  => '{"name_en":"Platform","name_ka":"პლატფორმა"}',
					'image' => 'images/platform.jpg',
				],
				[
					'name'  => '{"name_en":"Deep Sleep","name_ka":"ღრმა ძილი"}',
					'image' => 'images/sleepp.jpg',
				],
			]
		);
	}
}
