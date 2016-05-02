<?php

use Illuminate\Database\Seeder;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('objects')->insert([
                    'name' => str_random(10),
                    'description' => str_random(50),
                    'user_id' => $i,
            ]);
            DB::table('objects')->insert([
                    'name' => str_random(10),
                    'description' => str_random(50),
                    'user_id' => $i,
            ]);
            DB::table('objects')->insert([
                    'name' => str_random(10),
                    'description' => str_random(50),
                    'user_id' => $i,
            ]);
        }
    }
}
