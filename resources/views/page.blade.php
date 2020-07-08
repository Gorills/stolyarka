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


        @slot('link') {{ url('/stroitelstvo') }} @endslot
        @slot('prev') Строительство @endslot


        @slot('active') Дома из бруса @endslot

        @slot('img') {{ URL::asset('images/banner/1.jpg') }} @endslot
    @endcomponent


    <div class="grid">
        <div class="container">
            <h2 class="title">Проекты</h2>
            <div class="title__separator"></div>
            <div class="grid__inner">



                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


                </div>

                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


                </div>
                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


                </div>
                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


                </div>
                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


                </div>
                <div class="grid__item">

                    <div class="slick-2">
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/1.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/2.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/3.jpeg') }}" alt="" class="grid__img">

                        </div>
                        <div class="grid__wrapper">
                            <img src="{{ URL::asset('/images/catalog/home/1/4.jpeg') }}" alt="" class="grid__img">

                        </div>
                    </div>


                    <div class="grid__text">
                        <div class="grid__title">Название проекта</div>

                        <div class="grid__param">

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Комнат: <br><span class="grid__param-bold">5</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Размер: <br><span class="grid__param-bold">5 * 10</span></p>

                            </div>

                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Этажность: <br><span class="grid__param-bold">2</span></p>

                            </div>
                            <div class="grid__param-wrap">
                                <i class="grid__icon fas fa-ruler-vertical"></i>
                                <p class="grid__param-text">Сроки: <br><span class="grid__param-bold">25 дней</span></p>

                            </div>

                        </div>
                        <div class="grid__price-block">
                            <p class="grid__price">от 1 500 000</p>
                            <a href="#" class="grid__btn show_popup">Оставить заявку</a>
                        </div>

                    </div>


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




