<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'James Bhatta',
            'email' => 'jmsbhatta@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
    }
}
