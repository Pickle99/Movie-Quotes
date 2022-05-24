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
			'title'     => '{"en":"He succeeded in being considered totally uninteresting. People left him alone. And that was all he wanted.","ka":"მან მოახერხა სრულიად უინტერესოდ ჩაითვალოს. ხალხმა ის მარტო დატოვა. და ეს იყო ყველაფერი, რაც მას სურდა."}',
			'movie_id'  => '1',
		], [
			'title'     => '{"en":"...talent means nothing, while experience, acquired in humility and with hard work, means everything.","ka":"...ნიჭი არაფერს ნიშნავს, თავმდაბლობითა და შრომით შეძენილი გამოცდილება კი ყველაფერს ნიშნავს."}',
			'movie_id'  => '1',
		], [
			'title'     => '{"en":"Odors have a power of persuasion stronger than that of words, appearances, emotions, or will. The persuasive power of an odor cannot be fended off, it enters into us like breath into our lungs, it fills us up, imbues us totally. There is no remedy for it.","ka":"სუნს უფრო ძლიერი აქვს დარწმუნების ძალა, ვიდრე სიტყვების, გარეგნობის, ემოციების ან ნებისყოფის. სუნის დამაჯერებლობის ძალა არ შეიცვლება, ის ჩვენში სუნთქვის მსგავსად შემოდის ჩვენს ფილტვებში, გვავსებს, სრულყოფილად გვავსებს. ამის საშუალება არ არსებობს."}',
			'movie_id'  => '1',
		], [
			'title'     => '{"en":"I Told You Skyler, I Warned You For A Solid Year: You Cross Me, And There Will Be Consequences.","ka":"მე გითხარი სკაილერ, მე გაგაფრთხილე ერთი წლის განმავლობაში: შენ გადამკვეთე და იქნება შედეგები."}',
			'movie_id'  => '2',
		], [
			'title'     => '{"en":"If You Believe That Theres A Hell, Were Pretty Much Already Going There.","ka":"თუ გჯერათ, რომ არსებობს ჯოჯოხეთი, ჩვენ უკვე საკმაოდ დიდი რაოდენობით მივდივართ იქ."}',
			'movie_id'  => '2',
		], [
			'title'     => '{"en":"Well, Technically Chemistry Is The Study Of Matter. But I Prefer To See It As The Study Of Change.","ka":"ისე, ტექნიკურად ქიმია არის მატერიის შესწავლა. მაგრამ მე მირჩევნია დავინახო ის, როგორც ცვლილების შესწავლა."}',
			'movie_id'  => '2',
		], [
			'title'     => '{"en":"This is not a good place for someone who likes reading.","ka":"ეს არ არის კარგი ადგილი მათთვის, ვისაც კითხვა უყვარს."}',
			'movie_id'  => '3',
		], [
			'title'     => '{"en":"Dont use my word again.","ka":"აღარ გამოიყენო ჩემი სიტყვა."}',
			'movie_id'  => '3',
		], [
			'title'     => '{"en":"There are 3 kinds of people; the ones above, the ones below, and the ones who fall.","ka":"არსებობს 3 სახის ადამიანი; ზევით, ქვევით და ჩამოვარდნილთა."}',
			'movie_id'  => '3',
		], [
			'title'     => '{"en":"The key is love, the action is service, and the joy is knowing the grandeur that is God in us and in everything. ","ka":"მთავარი სიყვარულია, მოქმედება არის მსახურება და სიხარული არის სიდიადე შეცნობა, რომელიც არის ღმერთი ჩვენში და ყველაფერში."}',
			'movie_id'  => '4',
		], [
			'title'     => '{"en":"We hire people who want to make the best things in the world.","ka":"ჩვენ ვქირაობთ ადამიანებს, რომელთაც სურთ გააკეთონ საუკეთესო რამ მსოფლიოში."}',
			'movie_id'  => '4',
		], [
			'title'     => '{"en":"I was then at the height of my two-facedness: that is, outside I seemed one way, inside I was another; outside false, inside true.","ka":"მე მაშინ ორსახეობის სიმაღლეზე ვიყავი: ანუ გარეთ ერთი გზა მეჩვენა, შიგნით სხვა; გარეთ ყალბი, შიგნით ჭეშმარიტი."}',
			'movie_id'  => '4',
		]]);
	}
}
