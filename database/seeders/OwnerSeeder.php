<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
            'name' => 'ken1',
            'email' => 'kensuga1@gmail.com',
            'password' => Hash::make('password123'),
            'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'ken2',
                'email' => 'kensuga2@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'ken3',
                'email' => 'kensuga3@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'ken4',
                'email' => 'kensuga4@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'ken5',
                'email' => 'kensuga5@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'ken6',
                'email' => 'kensuga6@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11'
            ],
        ]);
    }
}
