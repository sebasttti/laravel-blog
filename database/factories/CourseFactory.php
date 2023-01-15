<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->catchPhrase();
        
        return [
            'name'=>$name,
            'slug'=>Str::slug($name,'-'),
            'description'=>$this->faker->paragraph(),
            'category'=>$this->faker->randomElement(['Web Development', 'Mobile Development'])
        ];
    }
}
