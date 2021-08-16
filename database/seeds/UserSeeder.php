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
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Admin
        User::firstOrCreate([
            'email' => 'jmsbhatta@gmail.com',
        ], [
            'first_name' => 'James',
            'last_name' => 'Bhatta',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'mobile' => '+9779865720910'
        ]);

        $user = User::where('email', 'jmsbhatta@gmail.com')->first();

        $user->assignRole($adminRole);

        // User
        User::firstOrCreate([
            'email' => 'john@example.com'
        ], [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'mobile' => '+9779804610902'
        ]);

        $user = User::where('email', 'john@example.com')->first();

        $user->assignRole($userRole);
    }
}
