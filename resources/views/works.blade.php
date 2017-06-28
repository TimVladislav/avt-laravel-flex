@extends('layouts.app')

@section('content')
    <section class="page-header page-header__bg page-header__bg--works" data-type="parallax" data-speed="-2">
        <div class="bg--dark"></div>
        <section class="text-header">
            <h1 class="text-header__title text-center text-white">МОИ РАБОТЫ</h1>
            <div class="line-hearts line-hearts--content">
                <span class="white-line gray-line"></span>
                <i class="fa fa-heart heart heart--line heart--medium heart--red heart--z"></i>
                <i class="fa fa-heart heart heart--line heart--medium heart--gray heart--ml"></i>
                <span class="white-line gray-line"></span>
            </div>
            <p class="text-header__description text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis</p>
        </section>
    </section>
    <section class="container container--row">
        <section class="col col-md-8">
            <section class="video-card col--bg-white">
                <section class="video-card__img" style="background-image: url(http://nevesta.moscow/wp-content/uploads/2016/06/AA_029.jpg)">
                    <section class="links">
                        <a href="#modal"><i class="fa fa-play"></i></a>
                    </section>
                    <i class="fa fa-heart"></i>
                </section>
                <h3 class="video-card__title">OUR FIRST DATING</h3>
                <p class="video-card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce urna urna, imperdiet et purus ut, ultricies sollicitudin arcu. Cras placerat, arcu non</p>
            </section>
        </section>
        <section class="col col-md-4">
            <section class="filter col--bg-white">
                <h3 class="filter__title">FILTER</h3>
                <ul>
                    <li class="filter__item"><a href="#">Item 1</a></li>
                    <li class="filter__item"><a href="#">Item 2</a></li>
                    <li class="filter__item"><a href="#">Item 3</a></li>
                </ul>
            </section>
        </section>
    </section>
@endsection