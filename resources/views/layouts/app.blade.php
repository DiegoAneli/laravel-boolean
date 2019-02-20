<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Laravel Boolean</title>
  </head>
  <body>

    <header>
      <div class="header-left">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="">
      </div>
      <div class="header-right">
        <ul>
          <li class="active"><a href="#">HOME</a></li>
          <li><a href="#">CORSO</a></li>
          <li><a href="#">METODO</a></li>
          <li><a href="#">DOPO IL CORSO</a></li>
          <li><a href="#">FAQ</a></li>
          <div class="btn btn-primary">Iscriviti</div>
        </ul>



      </div>
    </header>
    @yield('content')
  </body>
</html>
