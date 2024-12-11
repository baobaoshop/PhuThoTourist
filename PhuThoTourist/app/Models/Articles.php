<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles'; // Tên bảng trong database
    
    public $timestamps = false;

    protected $fillable = ['id', 'title', 'image', 'content', 'date', 'author', 'views', 'actionflag'];

    public function topics()
    {
        return $this->belongsToMany(Topics::class, 'article_topics', 'article_id', 'topic_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'ARTICLE_DOCUMENTS', 'article_id', 'document_id');
    }
}
