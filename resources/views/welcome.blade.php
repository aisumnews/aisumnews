<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AI Summarized News in Your Language</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h1 class="fixed">AISumNews in Your Language</h1>
                <h3>Select your Language ({{ count($langs) }} languages) </h3>
                <div class="row">
                    @foreach ($langs as $l)

                    <div class="col-6">
                        <a href="/{{ $l->language_code }}">
                            <span>{{$l->language_name}} ({{$l->language_code}})</span>
                        </a>
                    </div>


                    @endforeach
                </div>
                <div class="text-center">
                    <div><i style="color: red;">&hearts;</i> Brought to you by <a href="https://aisumnews.com" target="_blank">AISumNews</a></div>
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