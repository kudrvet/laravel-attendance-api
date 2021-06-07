<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerTimesheet extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id', 'datetime_in', 'datetime_out'];

    protected $hidden = ['created_at', 'updated_at'];

    public function worker()
    {
        return $this->belongsTo(Worker::class,'worker_id','id');
    }
}
