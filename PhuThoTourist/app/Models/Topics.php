<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topics extends Model
{
    use HasFactory;

    protected $table = 'topics'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'name', 'icon', 'action_flag'];

    public function articles()
    {
        return $this->belongsToMany(Articles::class, 'article_topic', 'topic_id', 'article_id');
    }
}
