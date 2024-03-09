<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($topics as $topic)
@if ($topic == 'top news')
    <sitemap>
        <loc>{{ url('/') }}/sitemap-{{ $language }}-top%20news.xml</loc>
    </sitemap>
@else
    <sitemap>
        <loc>{{ url('/') }}/sitemap-{{ $language }}-{{ $topic }}.xml</loc>
    </sitemap>    
@endif

@endforeach
</sitemapindex>