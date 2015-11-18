<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => 'Study Vagrant',
            'created_at' => new DateTime("28.11.2015 15:00")
        ]);

        DB::table('tasks')->insert([
            'name' => 'Study Puppet',
            'created_at' => new DateTime("28.11.2015 16:00")
        ]);

        DB::table('tasks')->insert([
            'name' => 'Combine them together',
            'created_at' => new DateTime("28.11.2015 17:00")
        ]);

        DB::table('tasks')->insert([
            'name' => 'Use it',
            'created_at' => new DateTime("28.11.2015 17:30")
        ]);
    }
}
