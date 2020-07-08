






<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb__inner">
            <h2 class="breadcrumb__title">{{ $title }}</h2>

            <ul class="breadcrumb__list">

                <li class="breadcrumb__item"><a href="{{ url('/') }}" class="breadcrumb__link">{{ $parent }}</a></li>


                @if($prev ?? '')
                    <li class="breadcrumb__item"><a href="{{ $link }}" class="breadcrumb__link">{{ $prev ?? ''}}</a></li>
                @else

                @endif

                <li class="breadcrumb__item">{{ $active }}</li>


            </ul>


        </div>
    </div>

    <img src="{!! $img ?? '' !!}" alt="{{ $title }}" class="breadcrumb__img">
</div>
