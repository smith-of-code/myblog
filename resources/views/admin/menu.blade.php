<nav class="main-nav">
    <ul class="main-nav__list">
        <li class="main-nav__item">
            <a href="{{ route('main') }}" class="main-nav__link ">главная</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.category.create') }}" class="main-nav__link">добавить категорию</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.category.list') }}" class="main-nav__link">список категорий</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.parser.reload') }}" class="main-nav__link">запарсить яндекс-новости</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.parser.create') }}" class="main-nav__link">добавить ресурс</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.news.create') }}" class="main-nav__link">добавить новость</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.news.list') }}" class="main-nav__link">Список новостей</a>
            <div class="background-nav"></div>
        </li>
        <li class="main-nav__item">
            <a href="{{ route('admin.users.list') }}" class="main-nav__link">Список пользователей</a>
            <div class="background-nav"></div>
        </li>

    </ul>
</nav>
