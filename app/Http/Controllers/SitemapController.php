<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\News;
use App\Models\LangNews;
use Illuminate\Support\Facades\Lang;

class SitemapController extends Controller
{
    //
    public function sitemap()
    {
        $languages = Language::all();
        return response()->view('sitemap.sitemap', [
            'langs' => $languages
        ]);
    }
    public function sitemapLang($language)
    {
        $topics = ['top news', 'world', 'business', 'technology', 'science', 'health', 'entertainment', 'sports'];
        $languages = $language;
        return response()->view('sitemap.sitemap_lang', [
            'topics' => $topics,
            'language' => $language,
        ]);
        
    }
    public function sitemapLangTopic($language, $topic)
    {
        $languages = $language;
        $topics = $topic;
        if ($language == 'eng_Latn') {
            $news = News::where('topic', $topic)
            ->where('language', 'eng_Latn')
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->orderBy('published_at', 'desc')
            ->get();
        } else {
            $news = LangNews::where('topic', $topic)
            ->where('language', $language)
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->orderBy('published_at', 'desc')
            ->get();
        }
        return response()->view('sitemap.sitemap_lang_topic', [
            'language' => $language,
            'topic' => $topic,
            'news' => $news
        ]);
    }
}
