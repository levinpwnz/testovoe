<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->domainName,
            'description' => $this->faker->sentence(random_int(10, 25)),
            'logo' => $this->faker->imageUrl(),
        ];
    }

    /**
     * Make logo for section
     * @return string
     */
    private function makeLogo(): string
    {
        return $this->faker->image(storage_path() . '\\app\\',640, 640, 'cat');
    }
}
