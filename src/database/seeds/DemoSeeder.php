<?php
namespace Avin\Demo\Seeds;

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        DB::table('avin_demo_items')->insert([
            'slug' => 'test',
            'name' => 'Test',
            'description' => 'My first item test.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
