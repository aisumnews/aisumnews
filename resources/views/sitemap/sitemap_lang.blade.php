<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($languages as $language)
@foreach ($topics as $topic)
@if ($topic == 'top news')
  <sitemap>
    <loc>{{ url('/') }}/sitemap-{{ $language->language_code }}-top%20news.xml</loc>
  </sitemap>
@else
  <sitemap>
    <loc>{{ url('/') }}/sitemap-{{ $language->language_code }}-{{ $topic }}.xml</loc>
  </sitemap>    
@endif
@endforeach
@endforeach
</sitemapindex>