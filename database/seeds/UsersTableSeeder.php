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
        //        
        DB::table('users')->insert([
            'name' => 'styven',
            'email' => 'stipelson@gmail.com',
            'password' => bcrypt('secret'),
            'type' => 'default', 
        ]);
    }
}
