  <!-- start preloader -->
  <div class="preloader">
      <div class="sk-spinner sk-spinner-wave">
          <div class="sk-rect1"></div>
          <div class="sk-rect2"></div>
          <div class="sk-rect3"></div>
          <div class="sk-rect4"></div>
          <div class="sk-rect5"></div>
      </div>
  </div>
  <!-- end preloader -->

  <!-- start header -->
  <header>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <p><i class="fa fa-phone"></i><span> Phone</span>{{ env('SITE_PHONE') }}</p>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12">
                  <p><i class="fa fa-envelope-o"></i><span> Email</span><a
                          href="mailto:{{ env('SITE_EMAIL') }}">{{ env('SITE_EMAIL') }}</a></p>
              </div>
              <div class="col-md-5 col-sm-4 col-xs-12">
                  <ul class="social-icon">
                      <li><span>Meet Me on</span></li>
                      <li><a href="{{ env('FACEBOOK') }}" target="_blank" class="fa fa-facebook"></a></li>
                      <li><a href="{{ env('TWITTER') }}" target="_blank" class="fa fa-twitter"></a></li>
                      <li><a href="{{ env('INSTGRAM') }}" target="_blank" class="fa fa-instagram"></a></li>
                      <li><a href="{{ env('WHATSAPP') }}" target="_blank" class="fa fa-whatsapp"></a></li>
                      @guest
                          <li><a href="{{ route('login') }}">Log In</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          Welcome {{ Auth::user()->user_name . '  ' }}
                          <li><a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log
                                  out</a>
                          </li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </div>
  </header>
  <!-- end header -->

  <!-- start navigation -->
  <nav class="navbar navbar-default templatemo-nav" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon icon-bar"></span>
                  <span class="icon icon-bar"></span>
                  <span class="icon icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">Mahjoub</a>
          </div>
          <div class="collapse navbar-collapse">

              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#top">HOME</a></li>
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#team">TEAM</a></li>
                  <li><a href="#service">SERVICE</a></li>
                  <li><a href="#portfolio">PORTFOLIO</a></li>
                  <li><a href="#contact">CONTACT</a></li>
              </ul>

          </div>
      </div>
  </nav>
  <!-- end navigation -->
