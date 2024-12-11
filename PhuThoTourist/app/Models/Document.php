<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'name', 'url', 'date', 'action_flag'];

    public function articles()
    {
        return $this->belongsToMany(Articles::class, 'ARTICLE_DOCUMENTS', 'article_id', 'document_id');
    }
}
