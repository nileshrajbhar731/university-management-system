<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'student_name' => 'Student One',
            'class_teacher_id' => 1,
            'class' => '10th Grade',
            'admission_date' => '2023-01-01',
            'yearly_fees' => 1000.00,
        ]);

        Student::create([
            'student_name' => 'Student Two',
            'class_teacher_id' => 2,
            'class' => '11th Grade',
            'admission_date' => '2023-02-01',
            'yearly_fees' => 1200.00,
        ]);
    }
}
