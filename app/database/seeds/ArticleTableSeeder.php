<?php

class ArticleTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('articles')->delete();
		Article::create(array(
			'title' => 'Sachin Tendulkar',
            'author_id' =>  1,
            'body'  => 'Sachin Ramesh Tendulkar (born 24 April 1973) is a former Indian cricketer widely acknowledged as one of the greatest batsmen of all time, popularly holding the title "God of Cricket" among his fans.[2] Some commentators, such as former West Indian batsman Brian Lara, have labelled Tendulkar the greatest cricketer of all time.[6][7][8][9] He took up cricket at the age of eleven, made his Test debut against Pakistan at the age of sixteen, and went on to represent Mumbai domestically and India internationally for close to twenty-four years. He is the only player to have scored one hundred international centuries, the first batsman to score a double century in a One Day International, the only player to complete more than 30,000 runs in international cricket.[10] and the 16th player and first Indian to aggregate 50,000 runs or more in all forms of domestic and international recognised cricket.'
		));
        Article::create(array(
            'title' => 'Sourav Ganguly',
            'author_id' =>  1,
            'body'  => 'Sourav Chandidas Ganguly (About this sound pronunciation (help·info); born 8 July 1972), affectionately known as Dada (meaning elder brother) is a former Indian cricketer and captain of the Indian national team. Currently, he the Joint Secretary of Cricket Association of Bengal and President of the Editorial Board with Wisden India.[1] Born into an affluent Brahmin family, Ganguly was introduced into the world of cricket by his elder brother Snehasish. He is regarded as one of Indias most successful captains in modern times.[2] He started his career by playing in state and school teams. Currently, he is the 5th highest run scorer in One Day Internationals (ODIs) and was the 3rd person in history to cross the 10,000 run landmark, after Sachin Tendulkar and Inzamam Ul Haq. In 2002, the Wisden Cricketers Almanack ranked him the sixth greatest ODI batsman of all time, next to Viv Richards, Sachin Tendulkar, Brian Lara, Dean Jones and Michael Bevan.['
        ));
        Article::create(array(
            'title' => 'Wasim Akram',
            'author_id' =>  3,
            'body'  => 'Wasim Akram (born 3 June 1966) is a former Pakistani cricketer. A genuine left arm fast bowler who could bowl with significant pace who represented the Pakistan national cricket team in Test cricket and One Day International (ODI) matches. In October 2013,Wasim Akram was the only Pakistani cricketer to be named in an all-time Test World XI'
        ));
	}

}
