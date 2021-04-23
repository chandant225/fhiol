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
            'name' => 'Mixer & Grinder'
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'Rice Cooker',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
        
        \App\Category::firstOrCreate([
            'name' => 'Washing Machine',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
        
        \App\Category::firstOrCreate([
            'name' => 'Refrigerator',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
        
        \App\Category::firstOrCreate([
            'name' => 'Irons',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
        
        \App\Category::firstOrCreate([
            'name' => 'Hari Dryer',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'Hand Belnder',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);

        \App\Category::firstOrCreate([
            'name' => 'Trimmer',
        ], [
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci suscipit officia vero culpa dolores quia!',
            'status' => true
        ]);
    }
}
