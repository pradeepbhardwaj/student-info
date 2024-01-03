<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::insert(
            "firstName" => "Pradeep",
            "lastName" => "Bhardwaj",
            "rollNumber" => "A01",
            "grade" => "6th"
        );
        
    }
}
