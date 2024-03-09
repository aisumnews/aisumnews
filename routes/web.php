<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\SitemapController;
use App\Models\Language;
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
    $langs = \App\Models\Language::all();

    return view('welcome', ['langs' => $langs]);
});
Route::get('/about', function () {
    $lang = Language::where('language_code', 'eng_Latn')->first();
    return view('about',['lang'=>$lang]);
});
Route::get('/sitemap.xml',[SitemapController::class,'sitemap'])->name('sitemap');
Route::get('/sitemap-{begin}-{end}.xml',[SitemapController::class,'sitemap_other'])->name('sitemap_other');
Route::get('/sitemap-{language}-{topic}.xml',[SitemapController::class,'sitemapLangTopic'])->name('sitemapLangTopic');
Route::get('/sitemap-{language}.xml',[SitemapController::class,'sitemapLang'])->name('sitemapLang');

Route::get('/{language}/story/{topic}/{slug}/{id}',[
    NewsController::class,'topicStory'
])->name('topicStory');
Route::get('/{language}', [NewsController::class, 'langNews'])->name('lang');
//Route::get('/{language}/{topic}/{id}', [NewsController::class, 'langTopicId'])->name('langTopicId');
Route::get('/{language}/{topic}', [NewsController::class, 'langTopic'])->name('langTopic');