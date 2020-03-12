<?php

use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
        	'nama'=> 'pengumuman'
        	    	]);
        DB::table('kategori')->insert([
        	'nama'=> 'event'
        	    	]);
        DB::table('kategori')->insert([
        	'nama'=> 'berita'
        	    	]);
    }
}
