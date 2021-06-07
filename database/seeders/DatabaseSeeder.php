<?php

namespace Database\Seeders;

use App\Models\Worker;
use App\Models\WorkerTimesheet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        Worker::factory()
            ->has(WorkerTimesheet::factory()->count(10),'timesheets')
            ->count(5)
            ->create();
    }
}
