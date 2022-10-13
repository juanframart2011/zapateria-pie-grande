<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'genders' )->insert([
            'name' => 'hombre'
        ]);

        DB::table( 'genders' )->insert([
            'name' => 'mujer'
        ]);

        DB::table( 'modelos' )->insert([
            'name' => 'modelo A'
            'codigo' => 'modelo-a',
        ]);

        DB::table( 'modelos' )->insert([
            'name' => 'modelo B'
            'codigo' => 'modelo-b',
        ]);
    }
}
