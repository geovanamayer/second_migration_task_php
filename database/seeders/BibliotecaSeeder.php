<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title' => 'O Silmarillion (1977)',
            'AuthorPublisher' => 'J. R. R. Tolkien',
            'PublicationDate' => '1977-09-15',
            'GenreType' => 'Fantasia, Romance, Literatura fantástica',
            'AvailableCopies' => 9,
        ]);
    }
}
