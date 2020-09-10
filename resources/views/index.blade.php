@extends('layouts.custom')

@section('title', 'Строительство деревянных домов в Томске | Святобор-строй')
@section('description', 'Дома из профилированного, клееного бруса и оцилиндрованного бревна. Строительство домов по Вашим проектам и недорогие типовые решения. ')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Строительство деревянных домов в Томске | Святобор-строй')
@section('og:description', 'Дома из профилированного, клееного бруса и оцилиндрованного бревна. Строительство домов по Вашим проектам и недорогие типовые решения. ')
@section('og:url', '')
@section('twitter:title', 'Строительство деревянных домов в Томске | Святобор-строй')
@section('twitter:description', 'Дома из профилированного, клееного бруса и оцилиндрованного бревна. Строительство домов по Вашим проектам и недорогие типовые решения. ')


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
        <img src="{{ asset('images/banner/1.jpg') }}" alt="Дома из бруса" class="start__img">

    </div>

    <div class="start">
        <div class="start__item">
            <div class="container">
                <div class="start__text-block">
                    <p>Бани из дерева</p>

                </div>
                <a href="#" class="btn btn__accent">Подробнее</a>


            </div>

        </div>
        <img src="{{ asset('images/banner/2.jpg') }}" alt="Бани из дерева" class="start__img">

    </div>

    <div class="start">
        <div class="start__item">
            <div class="container">
                <div class="start__text-block">
                    <p>Столярная мастерская</p>

                </div>
                <a href="#" class="btn btn__accent">Подробнее</a>


            </div>

        </div>
        <img src="{{ asset('images/banner/3.jpg') }}" alt="Столярная мастерская" class="start__img">

    </div>


</div>


<div class="offer">
    <div class="container">
        <div class="offer__inner">


                <h2 class="title">Наши услуги</h2>
                <div class="title__separator"></div>



            <div class="offer__row">

                <a href="{{ url('/stroitelstvo/doma-iz-brusa') }}" class="offer__item offer__item--one">
                    <img src="{{ URL::asset('images/offer/dom-iz-brusa.jpg') }}" alt="ремонт квартир" class="offer__img">

                    <div class="offer__text-block">
                        <p class="offer__text">Дома из бруса</p>

                        <div class="offer__box-arrow">

                        </div>

                    </div>

                </a>



                <a href="{{ url('/stroitelstvo/derevyannye-bani') }}" class="offer__item offer__item--two">
                    <img src="{{ URL::asset('images/offer/3.jpg') }}" alt="Отделка стен" class="offer__img">

                    <div class="offer__text-block">
                        <p class="offer__text">Бани из дерева</p>

                        <div class="offer__box-arrow">

                        </div>

                    </div>

                </a>



                <a href="{{ url('/stolyarnaya-masterskaya') }}" class="offer__item offer__item--tree">
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
                    <p class="why__text">Опыт работы нашей компании составляет 10 лет</p>
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
                        Всем привет! Мы совсем недавно открывшаяся компания, но у нас уже есть огромный опыт работы в сфере
                        деревянного домостроения. В нашей команде есть специалисты по проектированию и дизайнерским решениям, что дает
                        нам возможность воплотить все ваши задумки визуально. При разработке проекта вашего дома и строительстве мы
                        отталкиваемся от таких параметров как:
                    </p>
                    <ul>
                        <li>Особенности участка, на котором будет стоять ваш дом</li>
                        <li>Исследования почты и грунта на вашем участке</li>
                    </ul>

                </div>
                <div class="about__column">
                    <p class="about__text">
                        Мы делаем проект вашего дома и наша команда плотников, бетонщиков, кровельщиков, столяров и маляров приступает к
                        осуществлению вашей мечты!
                    </p>
                    <p class="about__text">
                        Наше преимущество в том, что в нашей команде работают только профессионалы своего дела, которые горят им и готовы
                        работать до тех пор, пока не доведут проект до совершенства! Так же у нас есть своя собственная
                        <a href="{{ url('/stolyarnaya-masterskaya') }}">столярная мастерская</a>,
                        что также дает нам возможность дополнить ваш дом различными изделиями из натурального дерева по эксклюзивным проектам.
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

                <div class="why__item">
                    <i class="why__icon fa fa-car"></i>
                    <p class="why__text">Бесплатный выезд на объект и расчет сметы на строительство</p>
                </div>

                <div class="why__item">
                    <i class="why__icon fa fa-certificate"></i>
                    <p class="why__text">Гарантия 20 лет, с последующим обслуживанием</p>
                </div>

                <div class="why__item">
                    <i class="why__icon fa fa-money"></i>
                    <p class="why__text">Выгодные цены и индивидуальный подход</p>
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
