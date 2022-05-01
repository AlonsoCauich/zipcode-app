<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Informative;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Deshabilita fk
        Schema::disableForeignKeyConstraints();

        Informative::truncate();

        $sql_general = \Storage::path('sql/general.sql');
        \DB::unprepared(file_get_contents($sql_general));
        
    }
}
