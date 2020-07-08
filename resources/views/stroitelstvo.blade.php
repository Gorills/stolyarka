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
        @slot('title') Строим из дерева @endslot



        @slot('parent') Главная @endslot





        @slot('active') Строительство @endslot

        @slot('img') {{ URL::asset('images/banner/1.jpg') }} @endslot
    @endcomponent



    <div class="offer">
        <div class="container">
            <div class="offer__inner">


                <h2 class="title">Наши услуги</h2>
                <div class="title__separator"></div>



                <div class="offer__row">

                    <a href="{{ url('/stroitelstvo/derevyannye-doma') }}" class="offer__item offer__item--one">
                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="ремонт квартир" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Деревянные дома</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/') }}" class="offer__item offer__item--two">
                        <img src="{{ URL::asset('images/offer/2.jpg') }}" alt="Отделка балконов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Каркасные дома</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/') }}" class="offer__item offer__item--tree">
                        <img src="{{ URL::asset('images/offer/3.jpg') }}" alt="Отделка стен" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Бани из дерева</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/') }}" class="offer__item offer__item--for">
                        <img src="{{ URL::asset('images/offer/4.jpg') }}" alt="Отделка потолков" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Гаражи из дерева</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/') }}" class="offer__item offer__item--five">
                        <img src="{{ URL::asset('images/offer/5.jpg') }}" alt="Отделка полов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Деревянные беседки</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>



                </div>



            </div>
        </div>
    </div>



    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Строительство</h1>
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
                    <a href="#" class="btn btn__accent show_popup">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>







@endsection




