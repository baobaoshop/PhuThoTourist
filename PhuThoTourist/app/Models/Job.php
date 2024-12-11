<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'title', 'industry_id', 'type_id', 'edu_id', 'location_id', 'number', 'description', 'date', 'date_expired', 'image', 'working_hours', 'benefits', 'requirements', 'req_age', 'apply_docs', 'action_flag'];

    // Quan hệ với bảng INDUSTRY
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id');
    }

    // Quan hệ với bảng LOCATION
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    // Quan hệ với bảng EDULEVEL
    public function eduLevel()
    {
        return $this->belongsTo(EduLevel::class, 'edu_id');
    }

    // Quan hệ với bảng WORK_TYPE
    public function work_type()
    {
        return $this->belongsTo(Work_type::class, 'type_id');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'job_id');
    }
}
