<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('notes')->insert([
                    'subject' => str_random(10),
                    'body' => str_random(50),
                    'object_id' => $i,
            ]);
            DB::table('notes')->insert([
                    'subject' => str_random(10),
                    'body' => str_random(50),
                    'object_id' => $i,
            ]);
            DB::table('notes')->insert([
                    'subject' => str_random(10),
                    'body' => str_random(50),
                    'object_id' => $i,
            ]);
        }
    }
}
