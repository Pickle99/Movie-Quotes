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
				'image' => 'parfumer.jpg',
			],
				[
					'name'  => '{"en":"Breaking Bad","ka":"მძიმე დანაშაული"}',
					'image' => 'breakingbad.jpg',
				],
				[
					'name'  => '{"en":"Platform","ka":"პლატფორმა"}',
					'image' => 'platform.jpg',
				],
				[
					'name'  => '{"en":"Deep Sleep","ka":"ღრმა ძილი"}',
					'image' => 'sleepp.jpg',
				],
			]
		);
	}
}
