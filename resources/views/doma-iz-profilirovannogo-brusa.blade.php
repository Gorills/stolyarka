@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


@section('content')


    @component('components.breadcrumb')
        @slot('title') Дома из профилированного бруса @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot

        @slot('link') {{ url('/stroitelstvo') }} @endslot


        @slot('prevto') Дома из бруса @endslot

        @slot('linkto') {{ url('/stroitelstvo/doma-iz-brusa') }} @endslot


        @slot('active') Дома из профилированного бруса @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/doma-iz-profilirovannogo-brusa.jpg') }} @endslot
@endcomponent





    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Дома из профилированного бруса</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">
                        Профилированный брус — строительный материал, производимый из древесины хвойных пород по современной технологии. Полученные из леса-кругляка обрезные заготовки пропитывают
                        антисептиками и антипиренами, а затем тщательно высушивают и доводят до заданных размеров. Сохраняя такие свойства натуральной древесины, как прочность, способность удерживать тепло,
                        природная красота, цельный профилированный брус огнестоек и не подвержен короблению, гниению, растрескиванию. В отличие от клееного бруса он намного практичнее и долговечнее, дает меньшую
                        усадку, экологически безопасен и хорошо пропускает воздух.
                    </p>


                    <p class="seotext__text">
                        Строительство дома из профилированного бруса «под ключ» — процесс, последовательно проходящий в несколько этапов:
                    </p>
                    <ul class="seotext__list">
                        <li class="seotext__item">выбор проекта и согласование сметы;</li>
                        <li class="seotext__item">изготовление готового к монтажу домокомплекта;</li>
                        <li class="seotext__item">подготовка территории строительства и закладка фундамента с учетом времени его оседания;</li>
                        <li class="seotext__item">монтаж сруба и обустройство кровли;</li>
                        <li class="seotext__item">прокладка и подсоединение инженерных коммуникаций;</li>
                        <li class="seotext__item">отделочные работы.</li>

                    </ul>

                    <p class="seotext__text">
                        Наиболее распространенные варианты этого дома с бруса  профилированного на заводе, либо строганного нашими мастерами,
                        такой дом лучше всего возводить зимой, т.к. зимний лес меньше всего содержит влаги, но такому дому нужна усадка и к финишной
                        отделке Вы можете приступить на следующий год.
                    </p>

                </div>




{{--                <div class="seotext__wrapper">--}}
{{--                    <div>--}}
{{--                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}
{{--                    </div>--}}

{{--                </div>--}}


                <div class="seotext__btn-wrapper">
                    <a href="#" class="btn btn__accent show_popup">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>

@endsection




