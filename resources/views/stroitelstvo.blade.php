@extends('layouts.custom')

@section('title', 'Построить дом из дерева недорого в Томске: бани, дома, дачи | Святобор-строй')
@section('description', 'Строительство бань из дерева недорого, качественно, как по собственным проектам, так и по типовым решениям. Дачи из бруса и бревна. Деревянные дома недорого.')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Построить дом из дерева недорого в Томске: бани, дома, дачи | Святобор-строй')
@section('og:description', 'Строительство бань из дерева недорого, качественно, как по собственным проектам, так и по типовым решениям. Дачи из бруса и бревна. Деревянные дома недорого.')
@section('og:url', '')
@section('twitter:title', 'Построить дом из дерева недорого в Томске: бани, дома, дачи | Святобор-строй')
@section('twitter:description', 'Строительство бань из дерева недорого, качественно, как по собственным проектам, так и по типовым решениям. Дачи из бруса и бревна. Деревянные дома недорого.')


@section('content')






    @component('components.breadcrumb')
        @slot('title') Строительство из дерева @endslot



        @slot('parent') Главная @endslot

        @slot('active') Строительство @endslot
        @slot('activelink') {{ url('/stroitelstvo') }}  @endslot

        @slot('img') {{ URL::asset('images/banner/1.jpg') }} @endslot
    @endcomponent


    <div class="offer">
        <div class="container">
            <div class="offer__inner">


                <h2 class="title">Мы строим:</h2>
                <div class="title__separator"></div>



                <div class="offer__row">

                    <a href="{{ url('/stroitelstvo/doma-iz-brusa') }}" class="offer__item offer__item--one">
                        <img src="{{ URL::asset('images/offer/dom-iz-brusa.jpg') }}" alt="Дома из бруса" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Дома из бруса</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/stroitelstvo/karkasnye-doma') }}" class="offer__item offer__item--two">
                        <img src="{{ URL::asset('images/offer/karkasnyi-dom.jpg') }}" alt="Каркасные дома" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Каркасные дома</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="{{ url('/stroitelstvo/derevyannye-bani') }}" class="offer__item offer__item--tree">
                        <img src="{{ URL::asset('images/offer/3.jpg') }}" alt="Отделка стен" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Бани из дерева</p>

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
                <h1 class="title">Строительство домов из дерева в Томске</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">Строительство домов из дерева древнейший и самый распространенный на терриротии России, а в особенности Сибири способ строительства.
                        Основываясь на опыте предков и используя современные технологии, позволяют нам осуществлять самые нереальные проекты и архитектурные решения, в отличии от каменных домов. Дома построенные из кедра считаются экологически безопасными, т.к. кедр и осина имеют свойства уничтожать вредные для человека бактерии, Каждле дерево имеет свои свойства и должно использоваться по своем у назначению.</p>

                    <p class="seotext__text">
                        Дома делятся на множество типов с разными технологиями строительства. Именно этот фактор влияет на время возведения,
                        финишную отделку, как внутри так и снаружи, но и соответственно на конечную сумму, которую вы планируете потратить на
                        строительство в дома нашей мечты.
                    </p>




                <div class="seotext__btn-wrapper">
                    <a href="#" class="btn btn__accent show_popup">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>







@endsection




