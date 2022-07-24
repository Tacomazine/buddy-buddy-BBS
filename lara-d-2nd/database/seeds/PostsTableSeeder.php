<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=5; $i++)
        {
            DB::table('posts')->insert([
                'user_id' => mt_rand(1,5),
                'title' => 'title'.$i,
                'body' => 'body'.$i,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
