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
        @slot('title') Дома из бруса @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot
        @slot('prev-title') @endslot
        @slot('link') {{ url('/stroitelstvo') }} @endslot




        @slot('active') Дома из бруса @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/banner/1.jpg') }} @endslot
@endcomponent

    <div class="offer-pos">
        <div class="container">
            <div class="offer-pos__inner">


                <h2 class="title">Мы строим</h2>
                <div class="title__separator"></div>



                <div class="offer-pos__row">

                    <a href="{{ url('/stroitelstvo/doma-iz-brusa/doma-iz-profilirovannogo-brusa') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/dom-iz-profilirovannogo-brusa.jpg') }}" alt="Дома из профилированного бруса" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Дома из профилированного бруса</p>

                        </div>

                    </a>
                    <a href="{{ url('/stroitelstvo/doma-iz-brusa/doma-iz-brusa-kamernoj-sushki') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/doma-iz-profilirovannogo-brusa-kamernoj-sushki.jpeg') }}" alt="Дома из профилированного бруса камерной сушки" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Дома из профилированного бруса камерной сушки</p>

                        </div>

                    </a>
                    <a href="{{ url('/stroitelstvo/doma-iz-brusa/doma-iz-kleenogo-brusa') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/doma-iz-kleenogo-brusa.webp') }}" alt="Дома из клееного бруса" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Дома из клееного бруса</p>

                        </div>

                    </a>

                    <a href="{{ url('/stroitelstvo/doma-iz-brusa/doma-iz-ocilindrovannogo-brevna') }}" class="offer-pos__item">
                        <img src="{{ URL::asset('images/offer/doma-iz-ocilindrovannogo-brevna.jpg') }}" alt="Дома из оцилиндрованного бревна" class="offer-pos__img">

                        <div class="offer-pos__text-block">
                            <p class="offer-pos__text">Дома из оцилиндрованного бревна</p>

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
                    <p class="seotext__text">Компания «Теремъ» специализируется на изготовлении и строительстве готовыхдомов из бруса под ключ.</p>

                    <p class="seotext__text">Пиломатериал мы изготавливаем на собственной производственной базе в Бронницах. Это позволяет нам быть уверенными в качестве бруса, который применяется при строительстве.</p>

                    <p class="seotext__text">Почему именно брус стоит выбрать для загородного жилья? На это есть ряд причин:</p>

                    <ul class="seotext__list">
                        <li class="seotext__item">1. Это экологически безопасный материал. Он изготавливается из тонких планок древесины хвойных пород, которые определённым образом склеиваются и спрессовываются в бруски разных размеров и форм.</li>
                        <li class="seotext__item">2. Теплопроводность. Внутри брусового здания вам легко будет поддерживать требуемую температуру в холода. При этом тепло не будет быстро покидать помещение.</li>
                        <li class="seotext__item">3. Звукоизоляция. В отличие от других деревянных материалов звукоизоляция в брусовых домах очень высока. Посторонние звуки не будут мешать вам наслаждаться отдыхом и тишиной загородной жизни.</li>
                        <li class="seotext__item">4. Отсутствие трещин. Это действительно так. В процессе эксплуатации в нём не образуются трещины, также он не поддаётся короблению.</li>
                        <li class="seotext__item">5. Не появляются микроорганизмы и плесень.</li>
                        <li class="seotext__item">6. Нет необходимости ждать усадки.</li>
                        <li class="seotext__item">7. Не боится перепадов температур и влажности.</li>


                    </ul>
                </div>

                <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="" class="seotext__img">

                <h1 class="title">Купить дом из бруса под ключ</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">
                        Компания «Теремъ» заботится о качестве реализуемых строений и удобстве клиентов. У нас вы купите дом из бруса с максимальным количеством выполняемых услуг.
                        При этом мы не навязываем своим покупателям лишние траты и берём на себя все расходы, связанные с арендой спецтехники и оборудования, необходимого при строительстве, в отличие от
                        других строительных компаний Москвы и Московской области.
                    </p>
                    <p class="seotext__text">
                        Итак, в стоимость дома из бруса включено следующее:
                    </p>

                    <ul class="seotext__list">
                        <li class="seotext__item">Проект будущего здания с внесением любых поправок и исправлений. При необходимости архитекторы разработают индивидуальный, эксклюзивный вариант по вашим размерам. Эта услуга для всех заказчиков бесплатна!</li>
                        <li class="seotext__item">Доставка и разгрузка материала на ваш участок, а также организация проживания строителей во время стройки. Обращаясь в компанию «Теремъ», клиенты не ломают над этим голову и ничего не платят дополнительно.</li>
                        <li class="seotext__item">Фундаментные работы.</li>
                        <li class="seotext__item">Строительство домов из бруса в Москве и любом районе Московской области.</li>
                        <li class="seotext__item">Внутренняя отделка под ключ, включая чистовые полы, обшивку стен и потолка вагонкой.</li>
                        <li class="seotext__item">Наружная отделка стен вагонкой или сайдингом.</li>
                        <li class="seotext__item">Утепление стен, пола, потолка.</li>
                        <li class="seotext__item">Установка оконных рам и межкомнатных дверей.</li>
                        <li class="seotext__item">Наружная дверь и обустройство крыльца или веранды.</li>
                        <li class="seotext__item">Кровельные работы.</li>
                    </ul>

                    <p class="seotext__text">
                        Увидеть построенные дома из бруса в Москве, пройтись внутри и задать вопросы менеджерам приглашаем в выставочный комплекс, который расположен недалеко от метро «Кузьминки».
                    </p>
                    <p class="seotext__text">
                        Хотите узнать подробности? Просто позвоните нам. Менеджеры проконсультируют и расскажут об условиях текущих акций. Звоните!
                    </p>




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




