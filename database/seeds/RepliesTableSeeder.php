<?php

use App\Models\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataSet=[
            [
                'user_id'=>2,
                'post_id'=>1,
                'body'=>'ミニブログデビュー',
            ],
            [
                'user_id'=>1,
                'post_id'=>1,
                'body'=>'ありがとう!',
            ],
            [
                'user_id'=>2,
                'post_id'=>3,
                'body'=>'ユーザーID:',
            ],
        ];

        foreach($dataSet as $data){
            Reply::create($data);
        }
    }
}
