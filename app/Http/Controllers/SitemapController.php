<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\News;
use App\Models\LangNews;
use App\Models\NLLBCode;
use Illuminate\Support\Facades\Lang;

class SitemapController extends Controller
{
    //
    /*
    public function sitemap()
    {
        $languages = Language::all();
        return response()->view('sitemap.sitemap', [
            'langs' => $languages
        ]);
    }
    */
    public function sitemapLang($language){
        $topics = ['top%20news', 'world', 'business', 'technology', 'science', 'health', 'entertainment', 'sports'];
        $language = Language::where('language_code', $language)->first();
        $lang_2_letter = NLLBCode::where('nllb_code', $language->language_code)->first();
        $lang_2_letter = $lang_2_letter->language_code;
        return response()->view('sitemap.sitemap_lang_code', [
            'topics' => $topics,
            'language' => $language,
            'lang_2_letter' => $lang_2_letter
        ])->header('Content-Type', 'application/xml');
    }
    public function sitemap()
    {
        $topics = ['top%20news', 'world', 'business', 'technology', 'science', 'health', 'entertainment', 'sports'];
        $languages = Language::where('id','<=', 50)->get();
        
        return response()->view('sitemap.sitemap_lang', [
            'topics' => $topics,
            'languages' => $languages,
        ])->header('Content-Type', 'application/xml');
        
    }
    public function sitemap_other($begin, $end)
    {
        $topics = ['top%20news', 'world', 'business', 'technology', 'science', 'health', 'entertainment', 'sports'];
        $languages = Language::where('id','>', $begin)
        ->where('id','<=', $end)->get();
        return response()->view('sitemap.sitemap_lang', [
            'topics' => $topics,
            'languages' => $languages,
        ])->header('Content-Type', 'application/xml');
        
    }
    
    public function sitemapLangTopic($language, $topic)
    {
        //$languages = $language;
        $topics = $topic;
        $lang_2_letter = NLLBCode::where('nllb_code', $language)->first();
        $lang_2_letter = $lang_2_letter->language_code;
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
            'news' => $news,
            'lang_2_letter' => $lang_2_letter
        ])->header('Content-Type', 'application/xml');
    }
}
