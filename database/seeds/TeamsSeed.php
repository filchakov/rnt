<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('teams')->truncate();

        $real = new \App\Team();
        $real->name = 'Real Madrid';
        $real->logo = 'assets/img/real.png';
        $real->save();

        $liverpool = new \App\Team();
        $liverpool->name = 'Liverpool';
        $liverpool->logo = 'assets/img/liverpool.png';
        $liverpool->save();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
