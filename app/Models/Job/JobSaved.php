<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSaved extends Model
{    

    protected $table = 'jobsaved';

    protected $fillable = [
        'id',
        'created_at',
        'update_at',
        'job_id',
        'user_id',
        'job_title',
        'job_region',
        'job_type',
        'image',
        'company',
    ];

    public $timestamps = true;
		
}
