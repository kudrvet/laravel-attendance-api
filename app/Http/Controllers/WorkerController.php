<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerCreateRequest;
use App\Http\Requests\WorkerUpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class WorkerController extends Controller
{
    /**
     * @return Worker[]
     */
    public function index()
    {
        return Worker::paginate(20);
    }

    /**
     * @param WorkerCreateRequest $request
     * @return mixed
     */
    public function store(WorkerCreateRequest $request)
    {
        return Worker::create($request->validated());
    }

    /**
     * @param Worker $worker
     * @return Worker
     */
    public function show(Worker $worker)
    {
        return $worker;
    }

    /**
     * @param WorkerUpdateRequest $request
     * @param Worker $worker
     * @return Worker
     */
    public function update(WorkerUpdateRequest $request, Worker $worker)
    {
        $worker->fill($request->validated());
        $worker->save();
        return $worker;
    }

    /**
     * @param Worker $worker
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
    }
}
