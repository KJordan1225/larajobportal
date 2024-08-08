<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'id',
        'job_id',
        'job_title',
        'job_region',
        'job_type',
        'user_id',
        'cv',
        'company',
        'image'
    ];

    public $timestamps = true;
}
