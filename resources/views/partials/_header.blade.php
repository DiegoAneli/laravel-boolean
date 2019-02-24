<header>
  <div class="header-left">
    <img src="https://www.boolean.careers/images/common/logo.png" alt="">
  </div>
  <div class="header-right">
    <ul>
      <li class="nav_item{{ (Request::route()->getName() == 'home') ? ' active' : null }}"><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="#">CORSO</a></li>
      <li><a href="#">METODO</a></li>
      <li><a href="#">DOPO IL CORSO</a></li>
      <li><a href="#">FAQ</a></li>
      <div class="btn btn-primary">Iscriviti</div>
    </ul>
  </div>
</header>
