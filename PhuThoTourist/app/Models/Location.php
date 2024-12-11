<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'name', 'address', 'action_flag'];

    // Quan hệ với bảng JOBS
    public function jobs()
    {
        return $this->hasMany(Job::class, 'location_id');
    }
}
