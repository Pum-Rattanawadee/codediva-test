<div id="header" class="fixed-top">
  <div class="d-none d-md-block">
    <nav class="navbar navbar-expand-md">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item small-font">
            <a class="nav-link btn common-button mr-3 py-1" href="#">Swensen's story</a>
          </li>
          <li class="nav-item small-font">
            <a class="lang" href="#">TH</a> | <a class="lang" href="#">EN</a>
          </li>
        </ul>
      </div>
      <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="/"><img class="logo-img" src="{{asset('/img/logo.png')}}"/></a>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav mx-auto align-items-center">
          @if(Request::session()->exists('username'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown header-icon" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item text-white" href="#">Hi! {{ Request::session()->get('username') }}</a>
                {{ Form::open(array('url' => '/member/logout', 'method' => 'post')) }}
                  {{ Form::submit('Log out', array('class' => 'dropdown-item text-white')) }}
                {{ Form::close() }}
              </div>
            </li>        
          @else
            <li class="nav-item">
              <a class="nav-link btn common-button mr-3 py-1" href="/member/login"><i class="fas fa-sign-in-alt"></i> log in</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link header-icon" href="#"><i class="fas fa-search"></i></a>
          </li>        
          <li class="nav-item">
            <a class="nav-link header-icon" href="#"><i class="fas fa-shopping-bag"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <nav class="navbar navbar-expand-md py-0 bg-nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuList" aria-controls="menuList" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-red"><i class="fas fa-list"></i></span>
    </button>

    <div class="mx-auto order-0 d-md-none">
      <a class="navbar-brand mx-auto" href="/"><img class="logo-img" src="{{asset('/img/logo.png')}}"/></a>
    </div>

    <div class="d-md-none">
      @if(!Request::session()->exists('username'))
        <a class="header-icon mr-2" href="/member/login"><i class="fas fa-sign-in-alt"></i></a>
      @endif
      <a class="header-icon" href="#"><i class="fas fa-shopping-bag"></i></a>
    </div>

    <div class="collapse navbar-collapse bg-red" id="menuList">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_cake.png')}}"/>Ice cream Cake</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_quart.png')}}"/>Ice cream Quart (450g)</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_quart.png')}}"/>Ice cream Mini Quart (250g)</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_takeaway.png')}}"/>Sundae Set</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_scoop.png')}}"/>Ice cream Scoop</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_topping.png')}}"/>Topping</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_icecream_bar.png')}}"/>Ice cream Bar</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_gift_voucher.png')}}"/>Gift Voucher</a>
        </li>
        <li class="nav-item text-md-center px-2 px-md-0 nav-member">
          <a class="nav-link text-white" href="#"><img class="d-md-none mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_member_card.png')}}"/>Swensen's Member Card</a>
        </li>
        <li class="nav-item px-2 nav-member d-md-none">
          <a class="nav-link text-white" href="#"><img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_story.png')}}"/>Swensen's Story</a>
        </li>
        <li class="nav-item px-2 nav-member d-md-none">
          <a class="nav-link text-white" href="#"><img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_aboutus.png')}}"/>About us</a>
        </li>
        <li class="nav-item px-2 nav-member d-md-none">
          <a class="nav-link text-white" href="#"><img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_finder.png')}}"/>Store Finder</a>
        </li>
        <li class="nav-item px-2 nav-member d-md-none">
          @if(Request::session()->exists('username'))
            <a class="nav-link text-white" href="#"><img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_profile.png')}}"/>My Account</a>
          @else
            <a class="nav-link text-white" href="/member/login"><img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_login.png')}}"/>Log in</a>
          @endif
        </li>
        <li class="nav-item px-2 nav-member d-md-none bg-nav">
          <div class="row my-2 justify-content-between">
            <div class="col-auto align-self-center">
              <a class="lang" href="#">TH</a> | <a class="lang" href="#">EN</a>
            </div>
            @if(Request::session()->exists('username'))
              <div class="col-auto">
                {{ Form::open(array('url' => '/member/logout', 'method' => 'post', 'id' => 'logoutForm')) }}
                  <img class="mr-2 menu-icon" src="{{asset('/img/menu_icon/swensens_menu_logout.png')}}" onclick="document.getElementById('logoutForm').submit()"/>{{ Form::submit('Sign out', array('class' => 'menu-signout')) }}
                {{ Form::close() }}
              </div>
            @endif
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>