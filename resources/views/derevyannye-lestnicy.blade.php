@extends('layouts.custom')

@section('title', 'Деревянные лестницы | Святобор-строй')
@section('description', 'Заказать деревянную лестницу в Томске по индивидуальному проекту.')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Деревянные лестницы | Святобор-строй')
@section('og:description', 'Заказать деревянную лестницу в Томске по индивидуальному проекту.')
@section('og:url', '')
@section('twitter:title', 'Деревянные лестницы | Святобор-строй')
@section('twitter:description', 'Заказать деревянную лестницу в Томске по индивидуальному проекту.')


@section('content')


    @component('components.breadcrumb')
        @slot('title') Деревянные лестницы @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Столярная мастерская @endslot
        @slot('prev-title') @endslot
        @slot('link') {{ url('/stolyarnaya-masterskaya') }} @endslot




        @slot('active') Деревянные лестницы @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/derevyannaya-lestnica.jpg') }} @endslot
@endcomponent

    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Деревянные лестницы в Томске</h1>
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




