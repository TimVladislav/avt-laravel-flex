@extends('layouts.app')

@section('content')
    <section class="main-slider-section">
        <div class="main-slider">
            <div class="main-slider__item main-slider__item--1" data-type="parallax" data-speed="-2"></div>
            <div class="main-slider__item main-slider__item--2" data-type="parallax" data-speed="-2"></div>
        </div>
        <div class="main-slider-section__text">
            <div class="box text-center">
                <div class="rotate">
                    <div class="box__text">A<span class="text-red">V</span>T</div>
                    <div class="box__text">video</div>
                </div>
                <div class="line-text">
                    *** Видеосъемка свадеб и торжеств ***
                </div>
                <div class="line-hearts">
                    <span class="white-line"></span>
                    <i class="fa fa-heart heart heart--line heart--medium heart--red heart--z"></i>
                    <i class="fa fa-heart heart heart--line heart--medium heart--white heart--ml"></i>
                    <span class="white-line"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <h1 class="text-center">THE HAPPY COUPLE</h1>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.</p>
        <section class="persons">
            <div class="persone">
                <figure>
                    <div style="background-image: url(http://demo.dethemes.com/forever/versions/side-bar/images/him2.jpg)" alt="Андрей" class="persone__img square">
                        <div class="persone__img--bg"></div>
                        <a href="#" class="persone__img__btn">Подробнее</a>
                    </div>
                    <p class="persone__text">
                        <strong>Андрей Тимошенко (видеограф).</strong>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.
                    </p>
                </figure>
            </div>
            <div class="persone">
                <figure>
                    <div style="background-image: url(http://demo.dethemes.com/forever/versions/side-bar/images/her2.jpg)" alt="Светлана" class="persone__img square">
                        <div class="persone__img--bg"></div>
                        <a href="#" class="persone__img__btn">Подробнее</a>
                    </div>
                    <p class="persone__text">
                        <strong>Светлана Тимошенко (ведущая).</strong>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.
                    </p>
                </figure>
            </div>
        </section>
    </section>
    <section class="parallax-section" data-type="parallax" data-speed="-2" style="background-image: url(/img/bg2.jpg)">
    </section>
    <section class="container">
        <h1 class="text-center">THE HAPPY COUPLE</h1>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.</p>
        <section class="cards">
            <div class="card">
                <div class="card__image">
                    <div class="persone">
                        <figure>
                            <div style="background-image: url(http://demo.dethemes.com/forever/versions/side-bar/images/him2.jpg)" alt="Андрей" class="persone__img square">
                                <div class="persone__img--bg"></div>
                                <a href="#" class="persone__img__btn">Подробнее</a>
                            </div>
                            <h3 class="persone__title">
                                LOCATION
                            </h3>
                            <p class="persone__text">
                                <strong>Андрей Тимошенко (видеограф).</strong>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.
                            </p>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <div class="persone">
                        <figure>
                            <div style="background-image: url(http://demo.dethemes.com/forever/versions/side-bar/images/him2.jpg)" alt="Андрей" class="persone__img square">
                                <div class="persone__img--bg"></div>
                                <a href="#" class="persone__img__btn">Подробнее</a>
                            </div>
                            <h3 class="persone__title">
                                LOCATION
                            </h3>
                            <p class="persone__text">
                                <strong>Андрей Тимошенко (видеограф).</strong>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.
                            </p>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <div class="persone">
                        <figure>
                            <div style="background-image: url(http://demo.dethemes.com/forever/versions/side-bar/images/him2.jpg)" alt="Андрей" class="persone__img square">
                                <div class="persone__img--bg"></div>
                                <a href="#" class="persone__img__btn">Подробнее</a>
                            </div>
                            <h3 class="persone__title">
                                LOCATION
                            </h3>
                            <p class="persone__text">
                                <strong>Андрей Тимошенко (видеограф).</strong>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus.
                            </p>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
