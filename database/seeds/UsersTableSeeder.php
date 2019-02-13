<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->delete();
    	DB::table('categories')->delete();
    	DB::table('users')->delete();

        $user_id = DB::table('users')->insertGetId([
            'email' => 'test@gmail.com',
            'password' => bcrypt('test'),
            'name' => 'Name',
            'lastname' => 'Lastname'
        ]);


    	$categories_arr = [
    		['Space', 'space'],
    		['Style', 'style'],
    		['Nature', 'nature']
    	];

    	foreach ($categories_arr as $category_key => $category_value) {
	        $categories_id[] = DB::table('categories')->insertGetId([
	            'title' => $category_value[0],
	            'slug' => $category_value[1]
	        ]);
    	}

    	$category_id = $categories_id[array_rand($categories_id)];
    	var_dump($category_id);

    	DB::table('posts')->insert([
            'title' => 'Test Post',
            'slug' => 'test-post',
            'text' => 'Lorem ipsum...',
            'user_id' => $user_id,
            'category_id' => $category_id,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => NULL
        ]);
    }
}
