<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AI Summarized News in {{ $lang->language_name }} Language</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h1>AISumNews in {{ $lang->language_name }} Language</h1>
                @foreach ($news as $n)
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ empty($n->image)?'/images/default.jpeg': $n->image}}" alt="{{ $n->title }}" height="300" width="310">
                    <div class="card-body">
                        <h5 class="card-title">{{ str_replace('।', '', $n->title) }}</h5>
                        <p class="card-text">{{ $n->content }}</p>
                        <p class="card-text"><small class="text-muted">{{ $n->published_at }} Original News on <a target="_blank" href="{{ $n->url }}" class="text-muted" style="text-decoration:none;">{{ $n->publisher}}</a></small></p>
                    </div>
                </div>
                @endforeach
                <div class="col-auto text-center">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>