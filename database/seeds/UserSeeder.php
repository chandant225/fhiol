<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        User::firstOrCreate([
            'name' => 'James Bhatta'
        ], [
            'email' => 'jmsbhatta@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        $user = User::where('email', 'jmsbhatta@gmail.com')->first();

        $user->assignRole($adminRole);
    }
}
