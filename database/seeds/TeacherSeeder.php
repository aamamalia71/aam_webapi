<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   	   \App\Teacher::create([
    		'nama'=>'Aam Amalia',
    		'alamat'=>'sukamenak'
    	]);
   	   \App\Teacher::create([
    		'nama'=>'Aam',
    		'alamat'=>'suk'
    	]);
        //
    }
}
