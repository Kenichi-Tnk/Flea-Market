<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eruiv="X-UA-Compatible" content="ie=edge">
    <title>coachtechフリマサイト</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header>
        <a class="header__link" href="/">
            <img class="header__logo" src="{{ asset('img/logo.svg') }}">
        </a>

        <form class="search__item" action="/search" method="get">
            <input class="search__item" type="text" name="searchText" placeholder="なにをお探しですか？">
        </form>
        <nav class="header__nav">
            <ul class="nav__list">
                <form action="/logout" method="post">
                    <li class="nav__item">
                        <button class="nav__item-button" type="submit">ログアウト</button>
                    </li>
                    <li class="nav__item">
                        <a class="nav__item-link" href="/mypage">マイページ</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__item-link" href="/sell">出品</a>
                    </li>
                </form>
            </ul>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
</body>
</html>