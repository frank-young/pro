<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Sample') - Laravel 入门教程</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
<<<<<<< HEAD
  <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="/" id="logo">Sample App</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('help') }}">帮助</a></li>
              <li><a href="#">登录</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
=======
    @include('layouts._header')
>>>>>>> filling-layout-style
    <div class="container">
      @yield('content')
       @include('layouts._footer')
    </div>
</body>
</html>
