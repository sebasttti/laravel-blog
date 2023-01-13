<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
            
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $course = new Course();
        $course->name = 'Laravel';
        $course->description = 'Curso de Laravel';
        $course->category = 'Desarrollo Web';
        
        $course->save(); */

        Course::factory(50)->create();
    }
}
