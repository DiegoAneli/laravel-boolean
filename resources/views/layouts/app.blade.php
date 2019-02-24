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
          <li class="active"><a href="{{ route('home') }}">HOME</a></li>
          <li><a href="{{ route('corso') }}">CORSO</a></li>
          <li><a href="{{ route('metodo') }}">METODO</a></li>
          <li><a href="{{ route('dopo_il_corso') }}">DOPO IL CORSO</a></li>
          <li><a href="{{ route('faq') }}">FAQ</a></li>
          <div class="btn btn-primary">Iscriviti</div>
        </ul>



      </div>
    </header>

    @yield('content')

    <div class="pre_footer">
      <div class="container">
        <div class="row">
          <div class="col-3"><img src="https://www.boolean.careers/images/common/logo.png"></div>
          <div class="col-3">
            <ul>
              <li>ciao@boolean.careers</li>
              <li>02-40031288</li>
              <li>+39 327-9578239</li>
            </ul>
          </div>

          <div class="col-3">
            <ul>
              <li><a href="{{ route('static.privacy') }}">Privacy Policy</a></li>
              <li><a href="{{ route('static.work_with_us') }}">Lavora con noi!</a></li>
            </ul>
          </div>
          <div class="col-3">Social</div>
        </div>
      </div>
    </div>


  <footer>
    <div class="footer">
      <div class="row">
        <div class="col-4">Boolean** (my_new_job > my_old_job) // returns true</div>
        <div class="col-8">Boolean SRLS - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</div>
      </div>
    </div>
  </footer>



  </body>
</html>
