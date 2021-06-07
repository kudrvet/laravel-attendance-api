<?php
namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'name'        => $faker->firstNameMale(),
            'surname'     => $faker->lastName($gender='male'),
            'middle_name' => $faker->middleNameMale(),
            'phone'       => $faker->phoneNumber()
        ];
    }
}
