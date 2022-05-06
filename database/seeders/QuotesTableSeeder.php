<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('quotes')->insert([[
			'name'     => '"People Look Up To This Boy And Call Him A Hero. Well, Ill Tell You What I Call Him: Public Enemy Number One!"',
			'image'    => 'storage/Spider Man No Way Home.jpg',
			'movie_id' => '1',
		], [
			'name'     => '"Hello, Peter."',
			'image'    => 'storage/Spider Man No Way Home.jpg',
			'movie_id' => '1',
		], [
			'name'     => '"Get On Your Phones, Scour The Internet, And Scooby Doo This Sh!T."',
			'image'    => 'storage/Spider Man No Way Home.jpg',
			'movie_id' => '1',
		], [
			'name'     => '"There are 3 kinds of people; the ones above, the ones below, and the ones who fall."',
			'image'    => 'storage/Platform.jpg',
			'movie_id' => '2',
		], [
			'name'     => '"This is not a good place for someone who likes reading."',
			'image'    => 'storage/Platform.jpg',
			'movie_id' => '2',
		], [
			'name'     => '"Maybe. But is that important? Because we re the same now. You and I are murders. But Im more civilized."',
			'image'    => 'storage/Platform.jpg',
			'movie_id' => '2',
		], [
			'name'     => '"God expects no complaining on our part and offers no explanation on His part."',
			'image'    => 'storage/Deep Sleep.jpg',
			'movie_id' => '3',
		], [
			'name'     => '"The key is love, the action is service, and the joy is knowing the grandeur that is God in us and in everything."',
			'image'    => 'storage/Deep Sleep.jpg',
			'movie_id' => '3',
		], [
			'name'     => '"As many have observed, it is easy to tell a lie, but it is almost impossible to tell only one."',
			'image'    => 'storage/Deep Sleep.jpg',
			'movie_id' => '3',
		], [
			'name'     => '"...talent means nothing, while experience, acquired in humility and with hard work, means everything."',
			'image'    => 'storage/Parfumer.jpg',
			'movie_id' => '4',
		], [
			'name'     => '"Not a visible enthusiasm but a hidden one, an excitement burning with a cold flame."',
			'image'    => 'storage/Parfumer.jpg',
			'movie_id' => '4',
		], [
			'name'     => '"He possessed the power. He held it in his hand."',
			'image'    => 'storage/Parfumer.jpg',
			'movie_id' => '4',
		], [
			'name'     => '"If You Believe That Theres A Hell, We re Pretty Much Already Going There."',
			'image'    => 'storage/Breaking Bad.jpg',
			'movie_id' => '5',
		], [
			'name'     => '"Stay Out Of My Territory."',
			'image'    => 'storage/Breaking Bad.jpg',
			'movie_id' => '5',
		], [
			'name'     => '"My Name Is Walter Hartwell White. I Live At 308 Negra Aroya Lane, Albuquerque, New Mexico, 87104. To All Law Enforcement Entities, This Is Not An Admission Of Guilt. I Am Speaking To My Family Now."',
			'image'    => 'storage/Breaking Bad.jpg',
			'movie_id' => '5',
		]]);
	}
}
