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
        return $this->belongsToMany(Articles::class, 'article_document', 'document_id', 'article_id');
    }
}
