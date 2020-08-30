

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb__inner">
            <h2 class="breadcrumb__title">{{ $title }}</h2>


            <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a class="breadcrumb__link" href="{{ url('/') }}" title="{{ $parent }}" itemprop="item">
                        <span itemprop="name">{{ $parent }}</span>
                        <meta itemprop="position" content="0">
                    </a>
                </li>

                @if(empty($prev) && empty($prevto))

                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link breadcrumb__link--active" href="{{ $activelink }}" title="{{ $active }}" itemprop="item">
                            <span itemprop="name">{{ $active }}</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                @elseif(empty($prevto))
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link" href="{{ $link }}" title="{{ $prev ?? ''}}" itemprop="item">
                            <span itemprop="name">{{ $prev ?? ''}}</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>

                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link breadcrumb__link--active" href="" title="{{ $active }}" itemprop="item">
                            <span itemprop="name">{{ $active }}</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </li>

                @elseif(isset($prev) && isset($prevto))

                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link" href="{{ $link }}" title="{{ $prev ?? ''}}" itemprop="item">
                            <span itemprop="name">{{ $prev ?? ''}}</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>

                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link" href="{{ $linkto }}" title="{{ $prevto }}" itemprop="item">
                            <span itemprop="name">{{ $prevto }}</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </li>

                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumb__link breadcrumb__link--active" href="" title="{{ $active }}" itemprop="item">
                            <span itemprop="name">{{ $active }}</span>
                            <meta itemprop="position" content="3">
                        </a>
                    </li>

                @endif


{{--            @if($prev ?? '')--}}

{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link" href="{{ $link }}" title="{{ $prev ?? ''}}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $prev ?? ''}}</span>--}}
{{--                        <meta itemprop="position" content="1">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link breadcrumb__link--active" href="" title="{{ $active }}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $active }}</span>--}}
{{--                        <meta itemprop="position" content="2">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--            @elseif($prevto ?? '' && $prev ?? '')--}}
{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link" href="{{ $link }}" title="{{ $prev ?? ''}}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $prev ?? ''}}</span>--}}
{{--                        <meta itemprop="position" content="1">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link" href="{{ $linkto }}" title="{{ $prevto }}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $prewto }}</span>--}}
{{--                        <meta itemprop="position" content="2">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link breadcrumb__link--active" href="" title="{{ $active }}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $active }}</span>--}}
{{--                        <meta itemprop="position" content="3">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--            @else--}}
{{--                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">--}}
{{--                    <a class="breadcrumb__link breadcrumb__link--active" href="{{ $activelink }}" title="{{ $active }}" itemprop="item">--}}
{{--                        <span itemprop="name">{{ $active }}</span>--}}
{{--                        <meta itemprop="position" content="1">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}


            </ul>


        </div>
    </div>

    <img src="{!! $img ?? '' !!}" alt="{{ $title }}" class="breadcrumb__img">
</div>
