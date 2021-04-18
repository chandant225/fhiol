<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        \App\Category::firstOrCreate([
            'name' => 'Mixture & Grinder',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
    }
}
