<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - AISumNews.com</title>
    <meta name="description" content="AISumNews or shortened for AI Summarized News is an open source application for displaying summarized news content from around the web. ">
    <meta name="keywords" content="aisumnews, ai, summarization, nlp">
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
    <meta property="og:title" content="About Us - AISumNews.com" />
    <meta property="og:description" content="AISumNews or shortened for AI Summarized News is an open source application for displaying summarized news content from around the web. " />
    <meta property="og:image" content="/images/default.jpeg" />
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
                            <a class="navbar-item" href="/about">
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

                    <div class="column is-6">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-3by1">
                                    <img src="/images/home-logo-transparent.png" alt="AISumNews Logo" >
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">

                                    <div class="media-content">
                                        <p class="title is-4">We deliver news in Multiple Languages</p>
                                        <p class="subtitle is-6"><a target="_blank" class="is-muted" href="/">AISumNews.com</a></p>
                                    </div>
                                </div>

                                <div class="content">
                                    AISumNews or shortened for AI Summarized News is an open source application for displaying summarized news content from around the web.
                                    <br>
                                    The initial version of the application was developed by <a href="https://sanjibnarzary.github.io">Sanjib Narzary</a>.  The server side application fetches news from around the world and with the help of Deep Neural Network the contents are summarized and titles are generated. The generated title and summarized contents are then translated to 208 languages using Neural Machine Translation (NMT) System.
                                    <br>
                                    <br>
                                    <p>News Story can be navigated by Left Arrow (<--) and Right Arrow (-->)</p>
                                </div>
                                
                            </div>
                        </div>
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
    <script src="/js/custom.js">
    </script>
</body>

</html>