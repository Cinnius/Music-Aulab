<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $compilations = [
        [
            'title' => 'Hit Mania Dance',
            'number' => '2',
        ],
        [
            'title' => 'M2O',
            'number' => '1',
        ],
        [
            'title' => 'Festival Bar 98',
            'number' => '4',
        ],
        [
            'title' => 'Summer Festival',
            'number' => '3',
        ],
    ];

    foreach($compilations as $compilation){
        DB::table('compilations')->insert([
            'title' => $compilation['title'],
            'number' => $compilation['number'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }

    }


}
