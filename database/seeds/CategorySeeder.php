<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::firstOrCreate([
            'name' => 'Foldable'
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'PMMA',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'CTR',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'Lens Injection System',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
    }
}
