<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangNews extends Model
{
    use HasFactory;
    public $fillable = ['news_id', 'title', 'content','country', 'language', 'topic', 'publisher', 'url', 'published_at'];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
