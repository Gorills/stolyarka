@extends('layouts.custom')


@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')
    @component('components.breadcrumb')
        @slot('title') Ошибка 404 @endslot

        @slot('parent') Главная @endslot


{{--        @slot('link') {{ url('/stroitelstvo') }} @endslot--}}
{{--        @slot('prev') Страница не найдена @endslot--}}


        @slot('active') Страница не найдена @endslot

        @slot('img') {{ URL::asset('images/banner/1.jpg') }} @endslot
    @endcomponent


    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Такая страница не найдена! Ошибка 404!</h1>


            </div>
        </div>
    </div>





@endsection
