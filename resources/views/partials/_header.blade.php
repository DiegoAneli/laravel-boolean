<header>
  <div class="header-left">
    <img src="https://www.boolean.careers/images/common/logo.png" alt="">
  </div>
  <div class="header-right">
    <ul>
      <li class="nav_item{{ (Request::route()->getName() == 'home') ? ' active' : null }}">
        <a href="{{ route('home') }}">HOME</a>
      </li>

      <li class="nav_item{{ (Request::route()->getName() == 'course') ? ' active' : null }}">
        <a href="{{ route('course') }}">CORSO</a>
      </li>

      <li class="nav_item{{ (Request::route()->getName() == 'metod') ? ' active' : null }}">
        <a href="{{ route('metod') }}">METODO</a>
      </li>

      <li class="nav_item{{ (Request::route()->getName() == 'after_course') ? ' active' : null }}">
        <a href="{{ route('after_course') }}">DOPO IL CORSO</a>
      </li>

      <li class="nav_item{{ (Request::route()->getName() == 'faq') ? ' active' : null }}">
        <a href="{{ route('faq') }}">FAQ</a>
      </li>



      <div class="btn btn-primary">Iscriviti</div>
    </ul>
  </div>
</header>
