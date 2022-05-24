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
				'name'  => '{"en":"Perfume: The Story of a Murderer","ka":"პარფიუმერი: ერთი მკვლელის ისტორია"}',
				'image' => 'images/parfumer.jpg',
			],
				[
					'name'  => '{"en":"Breaking Bad","ka":"მძიმე დანაშაული"}',
					'image' => 'images/breakingbad.jpg',
				],
				[
					'name'  => '{"en":"Platform","ka":"პლატფორმა"}',
					'image' => 'images/platform.jpg',
				],
				[
					'name'  => '{"en":"Deep Sleep","ka":"ღრმა ძილი"}',
					'image' => 'images/sleepp.jpg',
				],
			]
		);
	}
}
