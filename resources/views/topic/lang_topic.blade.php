<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $topic }} latest news in {{ $lang->language_name }} - AISumNews.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://aisumnews.com">
                    <img src="/images/logo.png" width="112" height="28"> 
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
        <section class="hero is-primary">
            <div class="hero-body">
                <p class="title">
                    {{ $topic }}
                </p>
                <p class="subtitle">
                    News in {{ $lang->language_name }}
                </p>
            </div>
        </section>
        <section class="section">
            <div class="container">
                @foreach($news as $new)
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ empty($new->image)?'/images/default.jpeg':$new->image}}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">

                            <div class="media-content">
                                <p class="title is-4">{{ $new->title }}</p>
                                <p class="subtitle is-6"><a target="_blank" class="is-muted" href="{{ $new->url }}">{{ $new->publisher }}</a></p>
                            </div>
                        </div>

                        <div class="content">
                            {{ $new->content }}
                            <br>
                            <a href="#">#{{ $new->topic }}</a> <a href="#">#{{ $lang->language_name }}</a> <a href="#">#{{ $new->country }}</a>
                            <br>
                            <time datetime="2016-1-1">{{ $new->published_at }}</time>
                            <span class="is-pulled-right">Read more at <a class="link is-right" href="{{ $new->url }}">{{ $new->publisher }}</a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="section">
            {{ $news->links() }}
        </section>
    </div>
</body>

</html>