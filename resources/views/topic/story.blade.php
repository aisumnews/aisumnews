<!DOCTYPE html>
<html lang="{{ $lang->language_code=='eng_Latn'?'en':preg_split ('/\_/', $lang->language_code)[0] }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $news->title}} - AISumNews.com</title>
    <meta name="description" content="{{ $news->content}}">
    <meta name="keywords" content="{{$topic}}, aisumnews, ai, {{$lang->language_name}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .section {
            padding-top: 1rem;
            padding-bottom: 2rem;
        }
    </style>

    <!-- Twitter Card //-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@aisumnews" />
    <meta name="twitter:creator" content="@SanjibNarzary" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ $news->content }}" />
    <meta property="og:image" content="{{ $news->image }}" />
    <!-- Open Graph //-->


</head>

<body>
    <section class="section">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://aisumnews.com">
                    <img src="/images/home-logo.png">
                    <!-- <h1 class="title is-4">AISumNews</h1> /-->
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/{{ $lang->language_code}}">
                        Home
                    </a>

                    <a class="navbar-item" href="/{{$lang->language_code}}/top news">
                        Top News
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/{{$lang->language_code}}/world">
                                World
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/business">
                                Business
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/technology">
                                Technology
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/science">
                                Science
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/health">
                                Health
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/entertainment">
                                Entertainment
                            </a>
                            <a class="navbar-item" href="/{{$lang->language_code}}/sports">
                                Sports
                            </a>

                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                About
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <section class="section">
            <div class="container">
                <div class="columns is-centered ">
                    <!-- Make left right button //-->
                    <div class="column is-1 is-hidden-mobile">
                        <a id="prev" href="{{ empty($prev)?'#':route('topicStory', ['language' => $lang->language_code, 'topic' => strtolower($topic), 'slug' => preg_split ('/\_/', $lang->language_code)[1]=='Latn'?Str::slug($prev->title, '-'):preg_replace('/\s+/u', '-', trim($prev->title)), 'id' => $prev->id]) }}" class="button is-pulled-right {{empty($prev)?'is-disabled':'is-primary '}}">
                            << </a>
                    </div>
                    <div class="column is-6">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{ empty($news->image)?'/images/default.jpeg':$news->image}}" alt="{{ $news->title }}">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">

                                    <div class="media-content">
                                        <p class="title is-4">{{ $news->title }}</p>
                                        <p class="subtitle is-6"><a target="_blank" class="is-muted" href="{{ $news->url }}">{{ $news->publisher }}</a></p>
                                    </div>
                                </div>

                                <div class="content">
                                    {{ $news->content }}
                                    <br>
                                    <a href="#">#{{ $news->topic }}</a> <a href="#">#{{ $lang->language_name }}</a> <a href="#">#{{ $news->country }}</a>
                                    <br>
                                    <time datetime="2024-1-1">{{ \Carbon\Carbon::parse($news->published_at)->diffForHumans() }}</time>
                                    <span class="is-pulled-right">Read more at <a class="link is-right" href="{{ $news->url }}">{{ $news->publisher }}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-1 is-hidden-mobile">
                        <a id="next" href="{{ empty($next)?'#':route('topicStory', ['language' => $lang->language_code, 'topic' => strtolower($topic), 'slug' => preg_split ('/\_/', $lang->language_code)[1]=='Latn'?Str::slug($next->title, '-'):preg_replace('/\s+/u', '-', trim($next->title)), 'id' => $next->id]) }}" class="button {{empty($next)?'is-disabled':'is-primary '}}">>></a>
                    </div>
                </div>


            </div>
        </section>

    </div>

    <div class="container">
        <!--   footer starts from here  -->
        <footer class="footer">
            <!-- Copyright symbol of company -->
            <div class="content has-text-centered">
                <p><img src="/images/home-logo-transparent.png"></p>

            </div>

            <!-- Three columns created using columns class of Bulma -->
            <div class="columns">
                <!-- Column 1 -->
                <div class="column">

                    <!-- Heading is left aligned, medium weight -->
                    <h4 class="bd-footer-title  
                 has-text-weight-medium 
                 has-text-left">
                        AISumNews
                    </h4>

                    <!-- footer content -->
                    <p class="bd-footer-link  
                has-text-left">
                        AISumNews is a news website that uses AI to generate news from around the world. We provide news in multiple languages and topics.
                    </p>

                </div>

                <!-- Column 2 -->
                <div class="column">
                    <h4 class="bd-footer-title  
                 has-text-weight-medium  
                 has-text-justify">
                        Explore
                    </h4>

                    <!-- Column 2 lists with links -->
                    <p class="bd-footer-link">
                        <a href="/{{$lang->language_code}}/top news">
                            <span class="icon-text">
                                <span>Top News</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/world">
                            <span class="icon-text">
                                <span>World</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/business">
                            <span class="icon-text">
                                <span>Business</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/technology">
                            <span class="icon-text">
                                <span>Technology</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/science">
                            <span class="icon-text">
                                <span>Science</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/health">
                            <span class="icon-text">
                                <span>Health</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/entertainment">
                            <span class="icon-text">
                                <span>Entertainment</span>
                            </span>
                        </a>
                        <br />
                        <a href="/{{$lang->language_code}}/sports">
                            <span class="icon-text">
                                <span>Sports</span>
                            </span>
                        </a>

                    </p>

                </div>

                <!-- Column 3 -->
                <div class="column">
                    <h4 class="bd-footer-title 
                 has-text-weight-medium 
                 has-text-justify">
                        Contact us
                    </h4>

                    <!-- Column 3 lists with links -->
                    <p class="bd-footer-link">
                        <a href="mailto:o-._.-o@live.com">
                            <span class="icon-text">
                                <span>Mail</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://github.com/aisumnews/aisumnews">
                            <span class="icon-text">
                                <span>Report Issues</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://aisumnews.com">
                            <span class="icon-text">
                                <span>Browse Languages</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://chat.bharatai.net" target="_blank">
                            <span class="icon-text">
                                <span>Chat with AI!</span>
                            </span>
                        </a>
                    </p>

                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/js/story.js">
    </script>
</body>

</html>