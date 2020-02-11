<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
    		'nama'=>'Aam Amalia',
    		'jk'=>'p'
    	]);
    }
}
