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
        @slot('title') Каркасные дома @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot
        @slot('prev-title') @endslot
        @slot('link') {{ url('/stroitelstvo') }} @endslot




        @slot('active') Каркасные дома @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/karkasnyy_dom_s_mansardoy.jpg') }} @endslot
@endcomponent

    <div class="offer-pos">
        <div class="container">
            <div class="offer-pos__inner">


                <h2 class="title">Так же мы строим:</h2>
                <div class="title__separator"></div>



                <div class="offer-pos__row">


                    <a href="{{ url('/stroitelstvo/karkasnye-doma/fahverkovye-doma') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/fahverkovye-doma.png') }}" alt="Дома из профилированного бруса камерной сушки" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Фахверковые дома</p>

                        </div>

                    </a>
                    <a href="{{ url('/stroitelstvo/karkasnye-doma/barnhouse') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/barnhaus.jpg') }}" alt="Дома из клееного бруса" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Барнхаус</p>

                        </div>

                    </a>




                </div>



            </div>
        </div>
    </div>





    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Каркасные дома</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">


                        Мы тоже не стоим на месте и развиваемся и можем предложить Вам строительство таких современных домов как "файхверк" и "барн хаус". Наши дизайнеры учтут Ваши пожелания, они могут создать неповторимый и современный дом вашей мечты
                    </p>



                </div>

{{--                <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}

{{--                <div class="seotext__text-wrapper">--}}
{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere--}}
{{--                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>--}}

{{--                    <ul class="seotext__list">--}}
{{--                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>--}}
{{--                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>--}}
{{--                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>--}}
{{--                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>--}}

{{--                    </ul>--}}
{{--                </div>--}}

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




