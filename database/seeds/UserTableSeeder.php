<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Dariusz dfhfdhdh',
            'email'=>'cofdfhs@tam.pl',
            'password'=>bcrypt('ZAQ!2wsx'),
            'phone'=>792452861,
            'adress'=>" Świony Kasztanowa 7 dfhdfhdfh",
            'status'=>'on',
            'pesel'=>'70050803174',
            'type'=>'student'
        ]);


    }
}
