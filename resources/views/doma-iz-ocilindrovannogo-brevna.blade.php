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
        @slot('title') Дома из оцилиндрованного бревна @endslot



        @slot('parent') Главная @endslot


        @slot('prev') Строительство @endslot

        @slot('link') {{ url('/stroitelstvo') }} @endslot


        @slot('prevto') Дома из бруса @endslot

        @slot('linkto') {{ url('/stroitelstvo/doma-iz-brusa') }} @endslot


        @slot('active') Дома из оцилиндрованного бревна @endslot
        @slot('activelink')  @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/doma-iz-ocilindrovannogo-brevna.jpg') }} @endslot
@endcomponent





    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Дома из оцилиндрованного бревна в Томске</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">

                        Так же распространенным вариантом является дома с оцилиндрованного бревна, такие дома имеют добротный и представительный вид. Дома из таких бревен стоят до настоящего времени, некоторые дома стоят более 300 лет. Не имея раньше таких технологий, наши предки строили такие качественные дома, которые дожили до наших дней.
                    </p>

                    <
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




