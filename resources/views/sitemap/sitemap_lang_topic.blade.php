<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">

@foreach ($news as $story)
@if (!empty($story->title))
<url>
    <loc>{{ route('topicStory', ['language' => $language, 'topic' => strtolower($topic), 'slug' => ($language=='eng_Latn')?Str::slug($story->title, '-'):preg_replace('/\s+/u', '-', trim($story->title)), 'id' => $story->id]) }}</loc>
    <lastmod>{{ \Carbon\Carbon::parse($story->published_at)->tz('UTC')->toAtomString() }}</lastmod>
    <priority>0.8</priority>
    <news:news>
    <news:publication>
        <news:name>AISumNews</news:name>
        <news:language>{{$lang_2_letter}}</news:language>
        </news:publication>
        <news:publication_date>{{ \Carbon\Carbon::parse($story->published_at)->format('Y-m-d')}}</news:publication_date>
        <news:title>{{ $story->title }}</news:title>
    </news:news>
</url>
@endif
@endforeach
</urlset>