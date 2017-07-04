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
            @foreach($works as $work)
                <section class="video-card col--bg-white" data-category="{{$work->category->id}}" data-type="filter_item">
                    <section class="video-card__img">
                        <img src="{{$work->youtubePreview()}}" alt="">
                        <section class="links">
                            <a href="#modal" data-content="video" data-resourse="youtube" data-link="{{$work->link}}"><i class="fa fa-play"></i></a>
                        </section>
                        <i class="fa fa-heart"></i>
                    </section>
                    <h3 class="video-card__title">{{$work->title}}</h3>
                    <p class="video-card__description">{{$work->description}}</p>
                </section>
            @endforeach
        </section>
        <section class="col col-md-4">
            <section class="filter col--bg-white">
                <h3 class="filter__title">КАТЕГОРИИ</h3>
                <ul>
                    <li class="filter__item"><a data-filter="0" class="active" href="#filter">Все</a></li>
                    @foreach($categories as $category)
                        <li class="filter__item"><a data-filter="{{$category->id}}" href="#filter">{{$category->filter_name}}</a></li>
                    @endforeach
                </ul>
            </section>
        </section>
    </section>
@endsection