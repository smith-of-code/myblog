<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')Главная @show</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<header class="header center">
    <div class="logo header__logo">
        <a href="{{ route('main') }}" class="logo__title">andy-news</a>
        <a href="{{ route('main') }}" class="logo__desc">новости отовсюду</a>
    </div>
    @section('main-menu')
        @if ( @empty($isAdmin))
            @include('menu')
        @else
            @include('admin.menu')
        @endif

        @show
</header>
<div class="content">

    <div class="greeting center">
        @section('greeting')
        <p class="greeting__quota">“</p>
        <p class="greeting__text">
        Добро пожаловать на мой первый новостной сайт, разработанный на laravel
        </p>
        @show
    </div>

    <h1 class="page-name center">@section('page-name')Главная @show</h1>
@yield('content')
</div>
<footer class="footer ">
    <article class="about center">
        <div class="about__team">
            <figure class="about__figure">
                <img class="about__photo" src="/images/team.jpg" alt="team">
                <figcaption class="about__figcaption">
                    <p class="about__name">Andrey Kleynos</p>
                    <div class="about__location"> <i class="fas fa-map-marker-alt"></i> Min-Vody Russia
                        <div class="about-map"><iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A4c1699cc7ec0c4219c7399113c90eff6f8d033ee58323054e3329bba3e95ab3d&amp;source=constructor" width="500" height="400" frameborder="0"></iframe></div>
                    </div>
                </figcaption>
            </figure>
            <div class="about__social">
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-vk"></i></a>
                <a href=""><i class="fab fa-telegram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="about__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

    </article>
    <div class="copyright center">
        <p class="copyright__text">Copyright © 2012 Css Author </p>
    </div>
</footer>
</body>
</html>

