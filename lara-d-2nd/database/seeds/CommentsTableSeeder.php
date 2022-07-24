<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
            DB::table('comments')->insert([
                'user_id' => mt_rand(1,5),
                'post_id' => mt_rand(1,5),
                'message' => 'message'.$i,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
