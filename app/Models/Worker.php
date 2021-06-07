<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'surname', 'middle_name', 'phone'];

    protected $hidden = ['created_at', 'updated_at'];

    public function timesheets()
    {
        return $this->hasMany(WorkerTimesheet::class,'worker_id','id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($worker) {
            $worker->timesheets()->each(function($timesheet) {
                $timesheet->delete();
            });
        });
    }

}
