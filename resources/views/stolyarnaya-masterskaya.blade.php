@extends('layouts.custom')

@section('title', 'Столярные работы в Томске, столярный мастер и столярная мастерская | Святобор-строй')
@section('description', 'Столярные работы в Томске любой сложности и из любых пород дерева. Выполнение индивидуальных проектов. Мастер столяр в Томске выполнит работу качественно и в срок. ')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Столярные работы в Томске, столярный мастер и столярная мастерская | Святобор-строй')
@section('og:description', 'Столярные работы в Томске любой сложности и из любых пород дерева. Выполнение индивидуальных проектов. Мастер столяр в Томске выполнит работу качественно и в срок.')
@section('og:url', '')
@section('twitter:title', 'Столярные работы в Томске, столярный мастер и столярная мастерская | Святобор-строй')
@section('twitter:description', 'Столярные работы в Томске любой сложности и из любых пород дерева. Выполнение индивидуальных проектов. Мастер столяр в Томске выполнит работу качественно и в срок.')


@section('content')


    @component('components.breadcrumb')

            @slot('title') Столярная мастерская @endslot



            @slot('parent') Главная @endslot


{{--            @slot('prev') Строительство @endslot--}}
{{--            @slot('link') {{ url('/stolyarnaya-masterskaya') }} @endslot--}}



            @slot('active') Столярная мастерская @endslot
            @slot('activelink')  @endslot

            @slot('img') {{ URL::asset('images/breadcrumbs/stolyarnaya.jpg') }} @endslot
    @endcomponent



    <div class="offer-pos">
    <div class="container">
        <div class="offer-pos__inner">


            <h2 class="title">Наши услуги</h2>
            <div class="title__separator"></div>



            <div class="offer-pos__row">

                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-lestnicy') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/derevyannaya-lestnica.jpg') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Деревянные лестницы</p>



                    </div>

                </a>

                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-dveri') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/derevyannaya-dver.jpg') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Двери из дерева</p>



                    </div>

                </a>
                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-stoly') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/Derevyannyiy-stol-46.jpg') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Деревянные столы</p>



                    </div>

                </a>
                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-lavki') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/derevyannaya-lavka.png') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Дереванные лавки</p>



                    </div>

                </a>
                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-kuhni') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/derevyannaya-kuhnya.jpg') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Кухни из дерева</p>



                    </div>

                </a>
                <a href="{{ url('/stolyarnaya-masterskaya/derevyannye-ehlementy-interera') }}" class="offer-pos__item">
                    <img src="{{ URL::asset('images/offer/ehlementy-interera-iz-dereva.jpg') }}" alt="Дома из бруса" class="offer-pos__img">

                    <div class="offer-pos__text-block">
                        <p class="offer-pos__text">Элементы интерьера</p>



                    </div>

                </a>



            </div>



        </div>
    </div>





    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Столярная мастерская в Томске</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">

                        Так же у нас имеется своя столярная мастерская, которая готова дополнить Ваш интерьер любым эксклюзивным и нестандартным решением. Производство изделий из дерева тоже требует много времени и затрат мастера, знаний в обработке древесины, но конечный результат порадует всех. Не один материал не может сравниться с массивом дерева по многим показателям. Структура дерева - большая палитра, которую использует мастер в изготовлении изделия, которыми могут пользоваться Ваши внуки. Только дерево можно отреставрировать, после чего это изделие снова станет новым.

                        Дерево - экологически чистый и безвредный материал.

                    </p>

{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi--}}
{{--                        excepturi facere laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus--}}
{{--                        porro quaerat quibusdam rerum, ut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eaque eius enim eos hic, id,--}}
{{--                        illum impedit ipsam ipsum libero non nulla obcaecati odit porro quam quidem suscipit unde veritatis.</p>--}}

{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere--}}
{{--                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolores doloribus earum explicabo labore minima neque reprehenderit.--}}
{{--                        Accusamus aliquid, autem, commodi consequatur cum dolorum, expedita fugit labore natus perspiciatis praesentium tempora voluptate? Delectus--}}
{{--                        dicta dolores eos id incidunt laboriosam magni nostrum odio, possimus quam quas quia quod repudiandae saepe.</p>--}}

{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere--}}
{{--                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>--}}

{{--                </div>--}}

{{--                    <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}

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

{{--                    <div class="seotext__wrapper">--}}
{{--                        <div>--}}
{{--                            <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">--}}
{{--                        </div>--}}

{{--                    </div>--}}


                <div class="seotext__btn-wrapper">
                    <a href="#" class="btn btn__accent show_popup">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>







@endsection




