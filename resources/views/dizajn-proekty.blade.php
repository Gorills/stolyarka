@extends('layouts.custom')

@section('title', 'Дизайн-проекты деревянных домов в Томске из любых пород дерева | Святобор-строй ')
@section('description', 'Наша компания готова реализовать Ваш дизайн-проект по строительству деревянного дома в срок. Проекты любой сложности. Более 30 готовых дизайнерских решений в строительстве деревянного дома.')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'Дизайн-проекты деревянных домов в Томске из любых пород дерева | Святобор-строй')
@section('og:description', 'Наша компания готова реализовать Ваш дизайн-проект по строительству деревянного дома в срок. Проекты любой сложности. Более 30 готовых дизайнерских решений в строительстве деревянного дома.')
@section('og:url', '')
@section('twitter:title', 'Дизайн-проекты деревянных домов в Томске из любых пород дерева | Святобор-строй')
@section('twitter:description', 'Наша компания готова реализовать Ваш дизайн-проект по строительству деревянного дома в срок. Проекты любой сложности. Более 30 готовых дизайнерских решений в строительстве деревянного дома.')


@section('content')


    @component('components.breadcrumb')
        @slot('title') Дизайн-проекты @endslot



        @slot('parent') Главная @endslot


{{--        @slot('prev')  @endslot--}}
{{--        @slot('prev-title') @endslot--}}
{{--        @slot('link') {{ url('/stroitelstvo') }} @endslot--}}




        @slot('active') Дизайн-проекты @endslot
        @slot('activelink') {{ url('/dizajn-proekty') }} @endslot

        @slot('img') {{ URL::asset('images/breadcrumbs/karkasnyy_dom_s_mansardoy.jpg') }} @endslot
@endcomponent




    <div class="seotext">
        <div class="container">
            <div class="seotext__inner">
                <h1 class="title">Почему важно не экономить на проектах?</h1>
                <div class="title__separator"></div>

                <div class="seotext__text-wrapper">
                    <p class="seotext__text">


                        Ну во-первых, Вы и строители имеют представление какой дом Вы хотите, где и как будет расположена электрика, сантехника, в итоге это самый важный документ по которому будут работать все, строители, сантехники, отделочники и монтажники. Во-вторых, в дальнейшем, когда Вы будите эксплуатировать дом и Вам придется где-то, что-то заменить, у Вас будет документация, которая позволит избежать неприятных ситуаций.
                    </p>



                </div>




                <div class="seotext__btn-wrapper">
                    <a href="#" class="btn btn__accent show_popup">Заказать звонок</a>

                </div>


            </div>
        </div>
    </div>

@endsection




