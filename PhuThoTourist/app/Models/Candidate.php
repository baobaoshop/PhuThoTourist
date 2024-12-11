<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidate'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'job_id',
        'name',
        'dob',
        'current_address',
        'email',
        'education_level',
        'willing_to_travel',
        'gender',
        'birth_place',
        'phone',
        'facebook',
        'cv',
        'overtime',
        'work_experience',
        'personal_experience',
        'status'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
