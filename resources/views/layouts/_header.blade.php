<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a href="{{ url('/') }}" class="navbar-brand">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}" class="nav-link">話題</a></li>
        <li class="nav-item {{ category_nav_active(1) }}"><a href="{{ route('categories.show', 1) }}" class="nav-link">分享</a></li>
        <li class="nav-item {{ category_nav_active(2) }}"><a href="{{ route('categories.show', 2) }}" class="nav-link">教程</a></li>
        <li class="nav-item {{ category_nav_active(3) }}"><a href="{{ route('categories.show', 3) }}" class="nav-link">問答</a></li>
        <li class="nav-item {{ category_nav_active(4) }}"><a href="{{ route('categories.show', 4) }}" class="nav-link">公告</a></li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登入</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">註冊</a></li>
        @else
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::id()) }}" class="dropdown-item">
              <i class="far fa-user mr-2"></i>
              個人中心
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('users.edit', Auth::id()) }}" class="dropdown-item">
              <i class="far fa-edit mr-2"></i>
              編輯資料
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="post" onsubmit="return confirm('您確定要登出嗎？')">
                @csrf
                <button class="btn btn-block btn-danger" type="submit" name="button">登出</button>
              </form>
            </a>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
