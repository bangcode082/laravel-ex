<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'username' => 'admin',
          'password' => bcrypt('rahasia'),
          'role' => 'admin',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
