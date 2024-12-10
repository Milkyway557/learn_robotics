<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'title' => 'Introduction to Arduino',
            'description' => 'Learn how to build and program robots using Arduino boards.',
            'image' => 'course1.jpg', // Ensure image exists in the 'public/images' folder
        ]);
    
        Course::create([
            'title' => 'Advanced Robotics',
            'description' => 'Master the art of building complex robots using various sensors and actuators.',
            'image' => 'course2.jpg',
        ]);
    
        Course::create([
            'title' => 'AI in Robotics',
            'description' => 'Understand how AI algorithms enhance robot functionality and automation.',
            'image' => 'course3.jpg',
        ]);
    }

}
