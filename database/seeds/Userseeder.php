<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'elman',
            'email' => 'muhammad.elman14@gmail.com',
            'password' => '$2y$10$xZTdJb/4JIu9coMMICaVQu6/pcAhve4PxcGfxeiI/6qIrkZ9Fm5kC'
        ]);
    }
}
