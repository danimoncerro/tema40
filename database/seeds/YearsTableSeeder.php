<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
        	'name'=>'Anul I',
        ]);

        DB::table('years')->insert([
        	'name'=>'Anul II',
        ]);
    }
}
