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
		DB::table('movies')->insert([[
			'name' => 'Spider Man No Way Home',
		], [
			'name' => 'Platform',
		], [
			'name' => 'Deep Sleep',
		], [
			'name' => 'Parfumer',
		], [
			'name' => 'Breaking Bad',
		]]);
	}
}
