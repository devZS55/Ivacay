<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\JobModel;
use App\Models\JobApplied;

class JobAppliedModel extends Model
{
    protected $table= "jobs_applied";
    use HasFactory;
    
    public function get_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function get_job()
    {
        return $this->belongsTo(JobModel::class, 'job_id');
    }
}
