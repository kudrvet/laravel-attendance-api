<?php

namespace App\Http\Controllers;

use App\Models\WorkerTimesheet;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $timesheets = QueryBuilder::for(WorkerTimesheet::class)
            ->allowedFilters(['worker.name','worker.surname','worker.middle_name','datetime_in'])
            ->orderBy('datetime_in')
            ->paginate(20);

        $filterParams = $request->input('filter');

        $searchName = $filterParams['worker.name'] ?? '';
        $searchSurname = $filterParams['worker.surname'] ?? '';
        $searchMiddlename = $filterParams['worker.middle_name'] ?? '';
        $searchDate = $filterParams['datetime_in'] ?? '';

        return view('index', compact('timesheets','searchName', 'searchSurname', 'searchMiddlename','searchDate'));
    }
}
