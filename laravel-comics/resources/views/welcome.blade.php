
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/scss/app.scss'])
    <title>Document</title>
</head>

<body>
    <nav class="big-nav-top">
        <div class="mini-nav-top">
            DC POWERVISA 
        </div>
        <div class="main-nav-top">
            <div class="logo-nav-top">
                <img src="{{asset('images/dc-logo.png')}}" alt="">
            </div>
            <div class="box-link">
                <a class="links" href="">CHARACTERS</a>
            </div>
            <div class="box-link">
                <a class="links" href="">COMICS</a>
            </div>
            <div class="box-link">
                <a class="links" href="">MOVIES</a>
            </div>
            <div class="box-link">
                <a class="links" href="">TV</a>
            </div>
            <div class="box-link">
                <a class="links" href="">GAMES</a>
            </div>
            <div class="box-link">
                <a class="links" href="">COLLECTIBLES</a>
            </div>
            <div class="box-link">
                <a class="links" href="/video">VIDEOS</a>
            </div>
            <div class="box-link">
                <a class="links" href="">FANS</a>
            </div>
            <div class="box-link">
                <a class="links" href="">NEWS</a>
            </div>

    </nav>

    <div class="container-fluid series">
        @yield('cont')
    </div>
</body>

</html>
