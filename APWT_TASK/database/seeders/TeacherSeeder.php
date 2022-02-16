<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Teacher::factory()->create([
            'name' => 'Teacher1Juena Ahmed Noshin ',
            'phone' => '+8801677******',
            'password' => '123456',
        ]);
    }
}