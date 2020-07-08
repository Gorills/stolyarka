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




<div class="slick">




    <div class="start">
        <div class="start__item">
            <div class="container">
                <div class="start__text-block">
                   <p>Дома из бруса</p>

                </div>
                <a href="{{ url('/stroitelstvo/derevyannye-doma') }}" class="btn btn__accent">Подробнее</a>


            </div>

        </div>
        <img src="{{ asset('images/banner/1.jpg') }}" alt="Настройка контекстной рекламы в Томске" class="start__img">

    </div>

    <div class="start">
        <div class="start__item">
            <div class="container">
                <div class="start__text-block">
                    <p>Дома из бруса</p>

                </div>
                <a href="#" class="btn btn__accent">Подробнее</a>


            </div>

        </div>
        <img src="{{ asset('images/banner/2.jpg') }}" alt="Настройка контекстной рекламы в Томске" class="start__img">

    </div>

    <div class="start">
        <div class="start__item">
            <div class="container">
                <div class="start__text-block">
                    <p>Дома из бруса</p>

                </div>
                <a href="#" class="btn btn__accent">Подробнее</a>


            </div>

        </div>
        <img src="{{ asset('images/banner/3.jpg') }}" alt="Настройка контекстной рекламы в Томске" class="start__img">

    </div>


</div>


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

{{--                <a href="{{ url('/otdelka-sanuzlov') }}" class="offer__item offer__item--six">--}}
{{--                    <img src="{{ URL::asset('images/offer/6.jpg') }}" alt="Отделка санузлов" class="offer__img">--}}

{{--                    <div class="offer__text-block">--}}
{{--                        <p class="offer__text">Отделка санузлов</p>--}}

{{--                        <div class="offer__box-arrow">--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                </a>--}}

                <a href="{{ url('/') }}" class="offer__item offer__item--seven">
                    <img src="{{ URL::asset('images/offer/7.jpg') }}" alt="Ремонт офисов" class="offer__img">

                    <div class="offer__text-block">
                        <p class="offer__text">Столярная мастерская</p>

                        <div class="offer__box-arrow">

                        </div>

                    </div>

                </a>

            </div>



        </div>
    </div>
</div>



<div class="why">
    <div class="container">
        <div class="why__inner">
            <h2 class="title">Почему мы</h2>
            <div class="title__separator"></div>
            <div class="why__row">

                <div class="why__item">
                    <i class="why__icon fa fa-universal-access"></i>
                    <p class="why__text">Опыт работы нашей компании составляет 30 лет</p>
                </div>

                <div class="why__item">
                    <i class="why__icon fa fa-gears"></i>
                    <p class="why__text">Мы имеем собственное полностью автономное производство</p>
                </div>

                <div class="why__item">
                    <i class="why__icon fa fa-users"></i>
                    <p class="why__text">В нашу команду входит более
                        20 сильнейших профессионалов своего дела</p>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="about">
    <div class="container">
        <div class="about__inner">
            <h2 class="title">О нас</h2>
            <div class="title__separator"></div>
            <div class="about__row">
                <div class="about__column">
                    <p class="about__text">
                        «Столярная мастерская №1» – это одно из самых больших столярных производств Волгоградского региона. Начав свою работу в далеком 1987-м году, мы по сей день остаемся верны своим первоначальным принципам: высокое мастерство, открытость новым идеям и следование безупречному качеству.
                        Столярное мастерство – это особая отрасль, которая не терпит халатного подхода и неискреннего отношения.
                    </p>
                </div>
                <div class="about__column">
                    <p class="about__text">
                        Поэтому в команду «Столярки» входят только проверенные годами опытнейшие мастера, которые не знают слова «невозможно». Ими реализованы проекты подчас головокружительной сложности, и вы можете убедиться в этом в разделе «Портфолио». Выбирая нашу компанию, вы выбираете профессионализм, качество и любовь к своему делу. И сотни наших довольных клиентов – тому подтверждение.
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>


<section class="main">
    <div class="container">
        <div class="main__inner">
            <h2 class="title">Наши преимущества</h2>
            <div class="title__separator"></div>

            <div class="main__row">

                <div class="main__item">
                    <i class="main__icon fa fa-car"></i>
                    <p class="main__text">Бесплатный выезд
                        на объект и замер</p>
                </div>
                <div class="main__item">
                    <i class="main__icon fa fa-certificate"></i>
                    <p class="main__text">Гарантия 2 года
                        на любое изделие</p>
                </div>

                <div class="main__item">
                    <i class="main__icon fa fa-money"></i>
                    <p class="main__text">Выгодые цены</p>
                </div>


            </div>


        </div>
    </div>
</section>


<div class="review">
    <div class="container">
        <div class="review__inner">
            <div class="title-wrapper">
                <h2 class="title">Отзывы</h2>
            </div>

            <div class="review__wrap">

                <div class="review__card">
                    <div class="review__front">

                        <div class="review__card-wrapper">

                            <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                        </div>
                        <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                            Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                            Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                            cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                        <div class="review__card-client">
                            <p class="review__name">Lorem ipsum dolor</p>
                            <p class="review__status">Клиент</p>
                        </div>


                    </div>
                    <div class="review__back">

                        <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                    </div>
                </div>

                <div class="review__card">
                    <div class="review__front">

                        <div class="review__card-wrapper">

                            <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                        </div>
                        <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                            Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                            Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                            cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                        <div class="review__card-client">
                            <p class="review__name">Lorem ipsum dolor</p>
                            <p class="review__status">Клиент</p>
                        </div>


                    </div>
                    <div class="review__back">

                        <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                    </div>
                </div>

                <div class="review__card">
                    <div class="review__front">

                        <div class="review__card-wrapper">

                            <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                        </div>
                        <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                            Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                            Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                            cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                        <div class="review__card-client">
                            <p class="review__name">Lorem ipsum dolor</p>
                            <p class="review__status">Клиент</p>
                        </div>


                    </div>
                    <div class="review__back">

                        <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                    </div>
                </div>




            </div>



        </div>
    </div>
</div>
</div>



@endsection
