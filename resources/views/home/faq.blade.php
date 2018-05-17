@extends('layouts.public')

@section('title', 'Xball - Вопросы и ответы')
@section('description', 'Часто задаваемые вопросы и ответы на них')
@section('keywords', 'FAQ вопросы ответы бампербол харьков')

@section('content')
    <!--Main-->
    <main>
        <div class="profile-page">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title"><i class="ion-ios-home-outline"></i> Главная</a></li>
                    <li typeof="v:Breadcrumb" class="active"><a href="#" rel="v:url" property="v:title">Вопросы и ответы</a></li>
                </ol>
                <div class="page-header clearfix">
                    <h1 class="name pull-left">Вопросы и ответы</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Правила игры?</h3>
                        Правила такие же как и при игре в футбол за исключением того, что на Вас надет шар.
                        Так же есть множество разновидностей игры в надувном шаре без футбольного мяча: суммо, в погоне за капитаном, остаться в живых и другие.
                        <br><br>
                        <h3>Какой вес у шара?</h3>
                        Вес шара составляет 10 кг, благодаря лямкам и ручкам вес распределяется равномерно по всей спине и не приносит играющему никакого дискомфорта.
                    </div>
                </div>
            </div>
        </div>

        <div id="darkness" class="hidden-xs"></div>
    </main>
    <!--Main End-->

    <div class="sticky-btns">
        <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div>
@endsection