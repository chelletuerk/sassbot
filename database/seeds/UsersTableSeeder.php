<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run() {
      DB::table('users')->insert([
          'name' => 'Sassy-Pants Sheila',
          'email' => 'youwishyouwereme@gmail.com',
      ]);
      DB::table('users')->insert([
          'name' => 'Make-My-Day Monique',
          'email' => 'youbreakyoubuy@gmail.com',
      ]);
    }
}
