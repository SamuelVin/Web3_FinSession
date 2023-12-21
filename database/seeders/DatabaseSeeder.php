<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
     {$this->call(PersonnesSeeder::class); 
      $this->call(FilmsSeeder::class);
      $this->call(FilmPersonneSeeder::class);  
      $this->call(UsagerSeeder::class);
      //$this->call(ActeursSeeder::class);
    }
}
