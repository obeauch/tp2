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

        $facts = file_get_contents(resource_path('cat-facts.json'));
        $facts = json_decode($facts, true);

        // dd($facts['data']);

        foreach($facts['data'] as $fact){
            $res = DB::table('facts')
                        ->insert([
                            "faits" => $fact["fact"],
                            "longueur" => $fact["length"],
                        ]);

            if(!$res) break;
        }

        return ["succes" => $res];

    }
}
