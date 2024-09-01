<header class="header_section">
  <div class="container">
    <div class="top_contact-container">
      <div class="tel_container">
        <a href="">
          <img src="images/telephone-symbol-button.png" alt=""> Call : +963 66208352
        </a>
      </div>
      <div class="social-container">
        <a href="">
          <img src="images/fb.png" alt="" class="s-1">
        </a>
        <a href="">
          <img src="images/twitter.png" alt="" class="s-2">
        </a>
        <a href="">
          <img src="images/instagram.png" alt="" class="s-3">
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="">
        <span>
          Medion
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}"> About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('showallhealth')}}"> Medicine </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('buy')}}"> Online Buy </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news')}}"> News </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cntact')}}">Contact us</a>
            </li>
          </ul>
          <form method="get" class="form-inline " action="{{route('search')}}">
            <input type="taxt" name="query" placeholder="Search">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"> </button>
          </form>
          <div class="login_btn-contanier ml-0 ml-lg-5">
            @if(Route::has('register1') or Route::has('login1'))


          @auth
        <a href="{{route('profile', ['id' => Auth::user()->id])}}">
        <img src="images/user.png" alt="">
        <span>
        {{Auth::user()->name}}
        </span>
        @if (Auth::user()->role == 'admin')
      </a> <a href="{{ route('dashboard') }}">
      <img src="images/user.png" alt="">
      <span>
      Dashboard
      </span>
    @endif
        </a>
        <a href="{{route('logout', ['id' => Auth::user()->id])}}">
        <img src="images/user.png" alt="">
        <span>
        Logout
        </span>
        </a>

      @else
      <a href="{{route('login')}}">
      <img src="images/user.png" alt="">
      <span>
      Login
      </span>
      </a>
      </div>

      <div class="login_btn-contanier ml-0 ml-lg-5">
      <a href="{{route('register')}}">
      <img src="images/user.png" alt="">
      <span>
      Register
      </span>
      </a>
      </div>


    @endauth
        </div>
      @endif
      </div>

    </nav>
  </div>
</header>