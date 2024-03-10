<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($topics as $topic)
@if ($topic == 'top%20news')
  <url>
    <loc>https://aisumnews.com/{{ $language->language_code }}/top%20news</loc>
  </url>
@else
  <url>
    <loc>https://aisumnews.com/{{ $language->language_code }}/{{$topic}}</loc>
  </url>
@endif
@endforeach
</urlset>