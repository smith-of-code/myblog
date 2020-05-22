<nav class="main-nav">
    <ul class="main-nav__list">
        <li class="main-nav__item">
            <a href="{{ route('main') }}" class="main-nav__link ">главная</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('category') }}" class="main-nav__link">категории</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('newsAll') }}" class="main-nav__link">новости</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin') }}" class="main-nav__link">админка</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('feedbackAdd') }}" class="main-nav__link">оставить отзыв</a>
            <div class="background-nav"></div>
        </li>

    </ul>
</nav>
