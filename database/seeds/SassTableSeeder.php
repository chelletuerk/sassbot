<?php

use Illuminate\Database\Seeder;

class SassTableSeeder extends Seeder {

    public function run() {
      DB::table('sass')->insert([
          'sass_comment' => "Oh, you're dating my ex?  I'm eating a sandwich...I'll save those leftovers too.",
          'user_id' => '1',
      ]);
      DB::table('sass')->insert([
          'sass_comment' => 'Too glam to give a damn',
          'user_id' => '2',
      ]);
    }
}
