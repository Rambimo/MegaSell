<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'username' => 'Rambimo',
                'name' => 'Rambimo Regeng Pangestu',
                'email' => 'rambimo28@gmail.com',
                'password' => Hash::make('1234')
            ],
            [
                'username' => 'Fergie',
                'name' => 'Fergie Fatah Ardiansyah',
                'email' => 'fergie133@gmail.com',
                'password' => Hash::make('1234')
            ]
        ]);
    }
}
