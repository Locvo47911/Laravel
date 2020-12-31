 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="{{{ asset('img/monkey_icon.jpg') }}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Styles -->
       <style>
            html, body          {background-color: #fff; color: #636b6f; font-family: 'Nunito', sans-serif; font-weight: 200; height: 100vh; margin: 0;}

            .full-height        {height: 100vh;}

            .navbar-header a    {font-family: Brush Script MT; font-size: 35px;}

            .flex-center        {align-items: center; display: flex; justify-content: center;}

            .position-ref       {position: relative;}

            .top-right          {position: absolute; right: 10px; top: 18px;}

            .content            {text-align: center; font-family: Brush Script MT;}

            .title              {font-size: 84px;}

            .links > a          {color: #636b6f; padding: 0 25px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;}

            .m-b-md             {margin-top: 30px;}

            .container101       {background: #E0E0E0FF; width: 100%; height: 70px; line-height: 70px; font-size: 17px;}

            .container102       {background: #C4C4C4FF; height: 40px; line-height: 40px;}

            .card-img-top       {border-radius: 50%;}
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Laravel</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('users.list')}}">User</a></li>
                        </ul>

                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="seach_value" name="search" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default"><img src="{{URL::asset('/img/icon_search.jpg')}}" class="img-responsive" alt="Image" width="20" height="20"></button>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>
        <main>
            <div class="flex-center position-ref full-height">
                @if (Route::has('form-login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}"></a>
                        @else
                            <a href="{{ route('form-login') }}"></a>

                            @if (Route::has('register'))
                                <a href="{{ route('form-register') }}"></a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="content">
                    <div class="title m-b-md">
                        Laravel
                    </div>
                </div>
            </div>
        </main>
            <footer class="page-footer font-small special-color-dark pt-4">

              <!-- Footer Elements -->
              <div class="container101">

                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li><a href="https://laravel.com/docs">Docs</a></li>
                    <li><a href="https://laravel-news.com">News</a></li>
                    <li><a href="https://blog.laravel.com">Blog</a></li>
                    <li><a href="https://nova.laravel.com">Nova</a></li>
                    <li><a href="https://forge.laravel.com">Forge</a></li>
                    <li><a href="https://laracasts.com">Laracasts</a></li>
                    <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
                </ul>
                <!-- Social buttons -->

              </div>
              <!-- Footer Elements -->
              <!-- Copyright -->
              <div class="container102">
                  <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="#">Loc Nguyen Vo</a>
                  </div>
              </div>
              <!-- Copyright -->
            </footer>
  <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
</html>


