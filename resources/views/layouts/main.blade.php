<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Article | {{ $Title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="/">WAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($Title === "Home") ? 'active' : '' }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($Title === "Articles") ? 'active' : '' }} "  href="/articles">Articles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($Title === "Post") ? 'active' : '' }}"  href="/post">Create Article</a>
                </li>
            
            </ul>
        </div>
    </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>