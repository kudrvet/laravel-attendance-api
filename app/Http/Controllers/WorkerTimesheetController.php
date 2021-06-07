<?php

namespace App\Http\Controllers;

use App\Models\WorkerTimesheet;
use App\Http\Requests\TimesheetCreateRequest;
class WorkerTimesheetController extends Controller
{
    public function store (TimesheetCreateRequest $request)
    {
        $validated = $request->validated();
        return WorkerTimesheet::create($validated);

    }

}
