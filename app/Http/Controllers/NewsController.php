<?php

namespace App\Http\Controllers;

use App\Models\LangNews;
use App\Models\Language;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return News::all();
    }
    public function store(Request $request)
    {
        $news = News::create($request->all());
        return response()->json($news, 201);
    }
    public function langNews($language)
    {
        $topic = 'All News';
        $topic = strtoupper($topic);
        $colors = [
            'ALL NEWS' => 'is-success',
            'TOP NEWS' => 'is-primary',
            'WORLD' => 'is-link',
            'BUSINESS' => 'is-info',
            'TECHNOLOGY' => 'is-success',
            'SCIENCE' => 'is-warning',
            'HEALTH' => 'is-danger',
            'ENTERTAINMENT' => 'is-primary',
            'SPORTS' => 'is-link'
        ];
        
        $color = $colors[$topic];
        $lang = Language::where('language_code', $language)->first();
        if ($language == 'eng_Latn') {
            $news = News::where('active', 1)
                ->orderBy('id', 'desc')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
            return view(
                'topic.lang_topic',
                [
                    'news' => $news,
                    'lang' => $lang,
                    'topic' => $topic,
                    'color' => $color,
                ]
            );
            //return $news;
        } else {
            $news = LangNews::where('language', $language)
                ->where('active', 1)
                ->orderBy('id', 'desc')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
            return view(
                'topic.lang_topic',
                [
                    'news' => $news,
                    'lang' => $lang,
                    'topic' => $topic,
                    'color' => $color,
                ]
            );
        }
    }
    public function countryLanguage($language, $topic)
    {
        $lang = Language::where('language_code', $language)->first();
        if ($language == 'eng_Latn') {
            return News::where('topic', $topic)
                ->orderBy('published_at', 'desc')
                ->take(1)
                ->get();
        } else {
            return LangNews::where('language', $language)
                ->where('topic', $topic)
                ->orderBy('published_at', 'desc')
                ->take(1)
                ->paginate(1);
        }
    }
    public function langTopicId($language, $topic, $id)
    {
        $lang = Language::where('language_code', $language)->first();
        if ($language == 'eng_Latn') {
            $news = News::where('language', 'eng_Latn')
                ->where('topic', $topic)
                ->where('id', $id)
                ->orderBy('published_at', 'desc')
                ->paginate(1)
                ->get();
            return view('lang_news', ['news' => $news, 'lang' => $lang]);
        } else {
            $news = LangNews::where('language', $language)
                ->where('topic', $topic)
                ->where('id', $id)
                ->orderBy('published_at', 'desc')
                ->paginate(1)
                ->get();
            return view('lang_news', ['news' => $news, 'lang' => $lang]);
        }
    }
    public function langTopic($language, $topic)
    {

        $topic = strtoupper($topic);
        $colors = [
            'TOP NEWS' => 'is-primary',
            'WORLD' => 'is-link',
            'BUSINESS' => 'is-info',
            'TECHNOLOGY' => 'is-success',
            'SCIENCE' => 'is-warning',
            'HEALTH' => 'is-danger',
            'ENTERTAINMENT' => 'is-primary',
            'SPORTS' => 'is-link'
        ];
        $color = $colors[$topic];
        $lang = Language::where('language_code', $language)->first();
        if ($language == 'eng_Latn') {
            $news = News::where('topic', $topic)
                ->where('active', 1)
                ->orderBy('id', 'desc')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
            return view(
                'topic.lang_topic',
                [
                    'news' => $news,
                    'lang' => $lang,
                    'topic' => $topic,
                    'color' => $color,
                ]
            );
            //return $news;
        } else {
            $news = LangNews::where('language', $language)
                ->where('topic', $topic)
                ->where('active', 1)
                ->orderBy('id', 'desc')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
            return view(
                'topic.lang_topic',
                [
                    'news' => $news,
                    'lang' => $lang,
                    'topic' => $topic,
                    'color' => $color,
                ]
            );
        }
    }
}
