<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
  
     public function run(): void
    {
        DB::table('alunos')->insert([
            'Name' => 'Geovana',
            'DateOfBirth' => '2003-05-23',
            'Email' => 'geovanamayer23@gmail.com',
            'RegistrationNumber' => '909090',
            'ClassCourse' => 'Analisys and Systems Development'
        ]);
    }
}