<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();

//		Movie::create([
//			'name' => 'Spider Man No Way Home',
//		]);
//
//		Movie::create([
//			'name' => 'Platform',
//		]);
//
//		Movie::create([
//			'name' => 'Deep Sleep',
//		]);
//
//		Movie::create([
//			'name' => 'Parfumer',
//		]);
//
//		Movie::create([
//			'name' => 'Breaking Bad',
//		]);

		Quote::create([
			'name' => 'People Look Up To This Boy And Call Him A Hero. Well, Ill Tell You What I Call Him: Public Enemy Number One!',
		]);

		Quote::create([
			'name' => 'Hello, Peter.',
		]);

		Quote::create([
			'name' => 'Get On Your Phones, Scour The Internet, And Scooby Doo This Sh!T.',
		]);

		Quote::create([
			'name' => 'Peter, You’re Struggling To Have Everything You Want While The World Tries To Make You Choose.',
		]);

		//breaking bad

		Quote::create([
			'name' => 'If You Believe That Theres A Hell, We re Pretty Much Already Going There." (Season 5, Episode 7 "Say My Name',
		]);
		Quote::create([
			'name' => 'Smoking Marijuana, Eating Cheetos, And Masturbating Do Not Constitute Plans In My Book.',
		]);
		Quote::create([
			'name' => 'Well, Technically Chemistry Is The Study Of Matter. But I Prefer To See It As The Study Of Change.',
		]);
		//Parfumer
		Quote::create([
			'name' => 'talent means nothing, while experience, acquired in humility and with hard work, means everything.',
		]);
		Quote::create([
			'name' => 'Odors have a power of persuasion stronger than that of words, appearances, emotions, or will. The persuasive power of an odor cannot be fended off, it enters into us like breath into our lungs, it fills us up, imbues us totally. There is no remedy for it.',
		]);
		Quote::create([
			'name' => 'For people could close their eyes to greatness, to horrors, to beauty, and their ears to melodies or deceiving words. But they couldnt escape scent. For scent was a brother of breath. Together with breath it entered human beings, who couldnt defend themselves against it, not if they wanted to live. And scent entered into their very core, went directly to their hearts, and decided for good and all between affection and contempt, disgust and lust, love and hate. He who ruled scent ruled the hearts of men.',
		]);
		// Platform
		Quote::create([
			'name' => 'There are 3 kinds of people; the ones above, the ones below, and the ones who fall.',
		]);
		Quote::create([
			'name' => 'This is not a good place for someone who likes reading.',
		]);
		Quote::create([
			'name' => 'No. No, I consider myself someone who s afraid, just like you - my tasty little roommate.',
		]);
		//DeepSleep
		Quote::create([
			'name' => 'God expects no complaining on our part and offers no explanation on His part.',
		]);
		Quote::create([
			'name' => 'The key is love, the action is service, and the joy is knowing the grandeur that is God in us and in everything. ',
		]);
		Quote::create([
			'name' => 'We hire people who want to make the best things in the world.',
		]);
	}
}
