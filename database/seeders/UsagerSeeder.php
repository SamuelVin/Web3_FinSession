<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usagers')->insert([
            [
               
                'nom' => 'Tremblay',
                'prenom' => 'ludovic',
                'role' => 'admin',
                'sexe' => 'masculin',
                'email' => 'ludovic@yahoo.com',
               'password' => Hash::make("Bonjour1234"),
            ],
        ]);
    }
}
