<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $fillable = ['title', 'content', 'country','author', 'image', 'language', 'topic', 'publisher', 'url', 'published_at'];
    
    public function langNews()
    {
        return $this->hasMany(LangNews::class, 'news_id');
    }
    

}
