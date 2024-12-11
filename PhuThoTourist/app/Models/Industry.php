<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    use HasFactory;

    protected $table = 'industry'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'name', 'action_flag'];

    // Quan hệ với bảng JOBS
    public function jobs()
    {
        return $this->hasMany(Job::class, 'industry_id');
    }
}
