<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\SitemapController;
use App\Models\Language;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $lang = Language::where('language_code', 'eng_Latn')->first();
    $news = News::where('active', 1)
                ->orderBy('id', 'desc')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
            return view(
                'topic.lang_topic',
                [
                    'news' => $news,
                    'lang' => $lang,
                    'topic' => 'ALL NEWS',
                    'color' => 'is-primary',
                ]
            );
});
Route::get('/languages', function () {
    $langs = \App\Models\Language::all();

    return view('welcome', ['langs' => $langs]);
});
Route::get('/about', function () {
    $lang = Language::where('language_code', 'eng_Latn')->first();
    return view('about',['lang'=>$lang]);
});
Route::get('/sitemap.xml',[SitemapController::class,'sitemap'])->name('sitemap');
Route::get('/sitemap-{begin}-{end}.xml',[SitemapController::class,'sitemap_other'])->name('sitemap_other')->where('begin', '[0-9]+')->where('end', '[0-9]+');
Route::get('/sitemap-{language}-{topic}.xml',[SitemapController::class,'sitemapLangTopic'])->name('sitemapLangTopic');
Route::get('/sitemap-{language}.xml',[SitemapController::class,'sitemapLang'])->name('sitemapLang');

Route::get('/{language}/story/{topic}/{slug}/{id}',[
    NewsController::class,'topicStory'
])->name('topicStory');
Route::get('/{language}', [NewsController::class, 'langNews'])->name('lang');
//Route::get('/{language}/{topic}/{id}', [NewsController::class, 'langTopicId'])->name('langTopicId');
Route::get('/{language}/{topic}', [NewsController::class, 'langTopic'])->name('langTopic');