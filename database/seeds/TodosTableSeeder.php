<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('todos')->truncate();
          $todos =   array(
              			array('title'=>'todo 0','state' => 0),
              			array('title'=>'todo 1','state' => 0),
              			array('title'=>'todo 2','state' => 0),
              			array('title'=>'todo 3','state' => 0),
              			array('title'=>'todo 4','state' => 0),
              			array('title'=>'todo 5','state' => 0),
            			);
		DB::table('todos')->insert($todos);
    }
}
