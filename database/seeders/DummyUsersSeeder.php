<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dummy Data
        $userData = [
            [
                'name'      => 'Mas Operator',
                'email'     => 'operator@gmail.com',
                'role'      => 'operator',
                'password'  => bcrypt('1')
            ],
            [
                'name'      => 'Mas Keuangan',
                'email'     => 'keuangan@gmail.com',
                'role'      => 'keuangan',
                'password'  => bcrypt('1')
            ],
            [
                'name'      => 'Mas Marketing',
                'email'     => 'marketing@gmail.com',
                'role'      => 'marketing',
                'password'  => bcrypt('1')
            ]
        ];

        // Perulangan Untuk Memasukkan Data ke Database
        foreach($userData as $key => $val){

            // Gunakan Inputan Dengan Eloquent
            User::create($val);
        }
    }
}
