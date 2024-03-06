
<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($langs as $lang)
    <sitemap>
        <loc>{{ url('/') }}/sitemap-{{ $lang->language_code }}.xml</loc>
    </sitemap>
@endforeach
</sitemapindex>