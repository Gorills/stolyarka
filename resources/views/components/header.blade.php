<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>
<?php $home = '/' ?>

<header class="header">
    <div class="container">
        <div class="header__inner">

            @if($home == $_SERVER['REQUEST_URI'])

                <img src="{{ URL::asset('images/logo.png') }}" alt="logo" class="header__logo">


            @else
                <a href="{{ url('/') }}" class="header__logo-link">
                    <img src="{{ URL::asset('images/logo.png') }}" alt="" class="header__logo">
                </a>
            @endif

         

            <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/') }}" itemprop="url">Главная</a>
                        <meta itemprop="name" content="Главная" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/stroitelstvo') }}" itemprop="url">Строительство</a>
                        <meta itemprop="name" content="Строительство" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/stolyarnaya-masterskaya') }}" itemprop="url">Столярная мастерская</a>
                        <meta itemprop="name" content="Столярная мастерская" />
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                        <a class="header__link" href="{{ url('/kontakty') }}" itemprop="url">Контакты</a>
                        <meta itemprop="name" content="Контакты" />
                    </li>
                </ul>
            </nav>

            <div class="header__phone">
                <i class="fas fa-phone-alt"></i>
                <a href="#" class="header__phone-link">8 (3822) 256-256</a>


            </div>



        </div>
    </div>
</header>
