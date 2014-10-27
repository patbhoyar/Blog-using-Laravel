<?php

class AuthorTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('authors')->delete();
		Author::create(array(
			'name'    => 'Sachin'
		));
        Author::create(array(
            'name'    => 'Saurav'
        ));
        Author::create(array(
            'name'    => 'Wasim'
        ));
        Author::create(array(
            'name'    => 'Rahul'
        ));
        Author::create(array(
            'name'    => 'Virat'
        ));
	}

}
