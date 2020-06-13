<nav class="main-nav">
    <ul class="main-nav__list">
        <li class="main-nav__item">
            <a href="{{ route('main') }}" class="main-nav__link ">главная</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('category.all') }}" class="main-nav__link">категории</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('news.all') }}" class="main-nav__link">новости</a>
            <div class="background-nav"></div>
        </li>
{{--        <li class="main-nav__item">--}}
{{--            <a href="{{ route('admin.index') }}" class="main-nav__link">админка</a>--}}
{{--            <div class="background-nav"></div>--}}
{{--        </li>--}}
        <li class="main-nav__item">
            <a href="{{ route('feedbacklist') }}" class="main-nav__link">отзывы</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('feedbackCreate') }}" class="main-nav__link">оставить отзыв</a>
            <div class="background-nav"></div>
        </li>
            </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item dropdown-menu-right" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.index') }}">админка</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
