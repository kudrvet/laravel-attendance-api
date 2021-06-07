<?php
namespace Database\Factories;

use App\Models\Worker;
use App\Models\WorkerTimesheet;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerTimesheetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkerTimesheet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ru_RU');
        $time = $faker->dateTimeBetween($startDate = '-5 days', $endDate = 'now', $timezone = null);
        $datetimeIn = clone $time;
        $datetimeOut = $time->add(new \DateInterval("PT6H"));

        return [
            'datetime_in' => $datetimeIn,
            'datetime_out' => $datetimeOut,
        ];
    }
}
