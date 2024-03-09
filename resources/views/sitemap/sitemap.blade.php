
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
@foreach ($langs as $lang)
<url>
<loc>{{ url('/') }}/sitemap-{{ $lang->language_code }}</loc>   
    <priority>1.0</priority>
</url>
@endforeach
</urlset>