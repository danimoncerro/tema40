<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'name'=>'Giurgiu Aurel',
        	'years_id'=>'1',
        ]);

        DB::table('students')->insert([
        	'name'=>'Pop Loredana',
        	'years_id'=>'2',
        ]);
    }
}
