<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Add sample teachers
      Teacher::create([
        'name' => 'John Doe',
        'subject' => 'Mathematics',
    ]);

    Teacher::create([
        'name' => 'Jane Smith',
        'subject' => 'English Literature',
    ]);
    }
}
