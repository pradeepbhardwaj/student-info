<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        teacher::insert(
            "teacherName" => "Anurag",
            "class" => "6th",
            "teacherUniqueId" => "B01"
        );
    }
}
