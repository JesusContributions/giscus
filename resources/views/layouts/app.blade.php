<!DOCTYPE html>
<html>
    <head>
        <title>Giscus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/app.css">

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                @if (Auth::check())
                <a href="/logout" class="btn btn-default pull-right meta-button">Log out <i class="fa fa-sign-out"></i></a>
                @else
                <a href="/auth/github" class="btn btn-default pull-right meta-button"><i class="fa fa-github"></i> Log in with GitHub</a>
                @endif
                <h1 class="text-center page-title page-title"><img src="/giscus-logo.png" class="giscus-logo giscus-logo" alt="Giscus"></h1>
            </div>
            <div class="row col-md-8 col-md-push-2">
                @yield('content')
            </div>

            <div class="row col-md-8 col-md-push-2 text-center footer">
                Giscus' source is on GitHub: <a href="https://github.com/tightenco/giscus">tightenco/giscus</a>.<br>
                By <a href="http://mattstauffer.co/">Matt Stauffer</a>, for a <a href="https://speakerdeck.com/mattstauffer/leveraging-laravel-launching-side-projects-quickly-with-laravel">talk at Laracon 2015</a>, powered by <a href="http://www.laravel.com/">Laravel</a>.<br>
                Logo by <a href="https://twitter.com/Caneco">Vitor Caneco</a>, with a picture of a <a href="https://en.wikipedia.org/wiki/Discus_(fish)">Discus</a> fish
            </div>
        </div>

        @yield('footerScripts')

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-40114814-9', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
