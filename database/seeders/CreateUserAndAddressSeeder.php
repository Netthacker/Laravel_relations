<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
                "name"=> "Tester",
                "email"=> "tester@123.com",
                "password"=> Hash::make("1234556"),
        ]);

        DB::table('addresses')->insert([
            "address"=> "Rua dos bobos, n°0",
        ]);

    }
}
