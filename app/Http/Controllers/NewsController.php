<?php

namespace App\Http\Controllers;

use App\Models\LangNews;
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
        if ($language == 'eng_Latn') {
            $news = News::where('language', 'eng_Latn')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
        } else {
            $news = LangNews::where('language', $language)
                ->orderBy('published_at', 'desc')
                ->paginate(10);
        }
        return view('lang_news', ['news' => $news]);
    }
    public function countryLanguage($language, $topic)
    {
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
        if ($language == 'eng_Latn') {
            $news = News::where('language', 'eng_Latn')
            ->where('topic', $topic)
                ->where('id', $id)
                ->orderBy('published_at', 'desc')
                ->paginate(1)
                ->get();
            return view('lang_news', ['news' => $news]);
        } else {
            $news = LangNews::where('language', $language)
                ->where('topic', $topic)
                ->where('id', $id)
                ->orderBy('published_at', 'desc')
                ->paginate(1)
                ->get();
                return view('lang_news', ['news' => $news]);
        }
    }
    public function langTopic($language, $topic)
    {
        if ($language == 'eng_Latn') {
            $news = News::where('topic', $topic)
                ->where('active', 1)
                ->orderBy('published_at', 'desc')
                ->get();
            //return view('lang_news', ['news' => $news]);
            return $news;
        } else {
            $news = LangNews::where('language', $language)
                ->where('topic', $topic)
                ->where('active', 1)
                ->orderBy('published_at', 'desc')
                ->get();
            return view('lang_news', ['news' => $news]);
            return $news;
        }
    }
}
