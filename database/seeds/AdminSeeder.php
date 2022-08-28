<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //getting data from the db
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.tn',
            'role'=>'admin',
            'password' => Hash::make('admin')]);
    }
}
