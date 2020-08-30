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
        @slot('title') Деревянные бани @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot
        @slot('prev-title') @endslot
        @slot('link') {{ url('/stroitelstvo') }} @endslot




        @slot('active') Деревянные бани @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/derevyannaya-banya.jpg') }} @endslot
@endcomponent

    <div class="offer-pos">
        <div class="container">
            <div class="offer-pos__inner">


                <h2 class="title">Мы строим:</h2>
                <div class="title__separator"></div>



                <div class="offer-pos__row">

                    <a href="{{ url('/stroitelstvo/derevyannye-bani/bani-iz-brusa') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/banya-iz-brusa.jpg') }}" alt="Дома из профилированного бруса" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Бани из бруса</p>

                        </div>

                    </a>
                    <a href="{{ url('/stroitelstvo/derevyannye-bani/bani-ocilindrovannogo-brevna') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/banya-iz-ocilindrovannogo-brevna.jpg') }}" alt="Дома из профилированного бруса камерной сушки" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Бани из из оцилиндрованного бревна</p>

                        </div>

                    </a>
                    <a href="{{ url('/stroitelstvo/derevyannye-bani/besedki') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/besedka-derevyannaya.jpg') }}" alt="Дома из профилированного бруса камерной сушки" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Беседки</p>

                        </div>

                    </a>

                </div>



            </div>
        </div>
    </div>





    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Дома из бруса</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum
                        eligendi excepturi facere laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt
                        ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>

                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi
                        excepturi facere laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus
                        porro quaerat quibusdam rerum, ut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eaque eius enim eos hic, id,
                        illum impedit ipsam ipsum libero non nulla obcaecati odit porro quam quidem suscipit unde veritatis.</p>

                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere
                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolores doloribus earum explicabo labore minima neque reprehenderit.
                        Accusamus aliquid, autem, commodi consequatur cum dolorum, expedita fugit labore natus perspiciatis praesentium tempora voluptate? Delectus
                        dicta dolores eos id incidunt laboriosam magni nostrum odio, possimus quam quas quia quod repudiandae saepe.</p>

                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere
                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>

                </div>

                <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere
                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>

                    <ul class="seotext__list">
                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>
                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>
                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>
                        <li class="seotext__item">Lorem ipsum dolor sit amet.</li>

                    </ul>
                </div>

                <div class="seotext__wrapper">
                    <div>
                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">
                    </div>

                </div>


                <div class="seotext__btn-wrapper">
                    <a href="#" class="btn btn__accent">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>

@endsection




