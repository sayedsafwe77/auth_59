<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a href="#!">Logo</a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
              <li>
                <a href="#!">Home</a>
              </li>
              <li>
                <a href="#!">About</a>
              </li>
              <li>
                <a href="#!">Services</a>
                <ul class="navbar-dropdown">
                  <li>
                    <a href="#!">Sass</a>
                  </li>
                  <li>
                    <a href="#!">Less</a>
                  </li>
                  <li>
                    <a href="#!">Stylus</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#!">Portfolio</a>
              </li>
              <li>
                <a href="#!">Category</a>
                <ul class="navbar-dropdown">
                  <li>
                    <a href="#!">Sass</a>
                  </li>
                  <li>
                    <a href="#!">Less</a>
                  </li>
                  <li>
                    <a href="#!">Stylus</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#!">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
    </section>

    <div class="content" >
        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
