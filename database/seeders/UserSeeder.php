<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'name' =>'Stefan',
                'email' =>'stefan@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('mrkvicka1'),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),



        );

        foreach ($users as $user){
            DB::table('users')->insert($user);
        }
    }
}
