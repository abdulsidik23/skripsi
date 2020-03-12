<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
        	'username'=> 'admin',
        	'password'=> Crypt::encrypt('admin'),
        	'status'=> 'aktif',
        	'tipe_user'=> 'admin'
        	]);

        DB::table('user')->insert([
        	'username'=> 'admin2',
        	'password'=> Crypt::encrypt('admin2'),
        	'status'=> 'aktif',
        	'tipe_user'=> 'admin2'
        	]);

       DB::table('user')->insert([
        	'username'=> 'user',
        	'password'=> Crypt::encrypt('user'),
        	'status'=> 'aktif',
        	'tipe_user'=> 'user'
        	]);
    }
}
