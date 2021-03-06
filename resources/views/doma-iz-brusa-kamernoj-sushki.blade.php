@extends('layouts.custom')

@section('title', 'Дома из бруса камерной сушки в Томске | Святобор-строй')
@section('description', 'Заказать строительство дома из бруса камерной сушки в Томске по низеим ценам. ')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Дома из бруса камерной сушки в Томске | Святобор-строй')
@section('og:description', 'Заказать строительство дома из бруса камерной сушки в Томске по низеим ценам. ')
@section('og:url', '')
@section('twitter:title', 'Дома из бруса камерной сушки в Томске | Святобор-строй')
@section('twitter:description', 'Заказать строительство дома из бруса камерной сушки в Томске по низеим ценам. ')


@section('content')

    @component('components.breadcrumb')
        @slot('title') Дома из бруса камерной сушки@endslot


        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot

        @slot('link') {{ url('/stroitelstvo') }} @endslot


        @slot('prevto') Дома из бруса @endslot

        @slot('linkto') {{ url('/stroitelstvo/doma-iz-brusa') }} @endslot


        @slot('active') Дома из бруса камерной сушки @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/doma-iz-profilirovannogo-brusa-kamernoj-sushki.jpeg') }} @endslot
@endcomponent



    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Дома из бруса камерной сушки</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">
                        Дома из клееного бруса и бруса камерной сушки дают возможность приступить почти сразу к отделочным работам после монтажа окон, дверей и остальных коммуникаций. Плюс такие дома имеют меньше пороков древесиныи почти не дают усадку.

                    </p>

                    <p class="seotext__text">Такие дома можно сразу красить и штукатурить под финишную отделку.
                        На этом экономиться значительная часть времени и денег.</p>

{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere--}}
{{--                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolores doloribus earum explicabo labore minima neque reprehenderit.--}}
{{--                        Accusamus aliquid, autem, commodi consequatur cum dolorum, expedita fugit labore natus perspiciatis praesentium tempora voluptate? Delectus--}}
{{--                        dicta dolores eos id incidunt laboriosam magni nostrum odio, possimus quam quas quia quod repudiandae saepe.</p>--}}

{{--                    <p class="seotext__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum eligendi excepturi facere--}}
{{--                        laudantium veritatis! Asperiores dignissimos eos esse hic in, incidunt ipsam magni necessitatibus porro quaerat quibusdam rerum, ut!</p>--}}

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




