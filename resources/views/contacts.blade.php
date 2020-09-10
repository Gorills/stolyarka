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
        @slot('title') Контакты @endslot



        @slot('parent') Главная @endslot


{{--        @slot('prev')  @endslot--}}
{{--        @slot('prev-title') @endslot--}}
{{--        @slot('link') {{ url('/stroitelstvo') }} @endslot--}}




        @slot('active') Контакты @endslot
        @slot('activelink') {{ url('/dizajn-proekty') }} @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/karkasnyy_dom_s_mansardoy.jpg') }} @endslot
@endcomponent


    <section class="contacts">
        <div class="container">
            <div class="contacts__inner">
                <h1 class="title">Контакты</h1>
                <div class="title__separator"></div>
                <div class="contacts__wrapper">
                    <a href="" class="contacts__link"><i class="fas fa-phone"></i> +7 983 239-68-89</a>
                    <a href="" class="contacts__link"><i class="fas fa-envelope"></i> 123456@yandex.ru</a>
                </div>



            </div>
        </div>
    </section>



@endsection




