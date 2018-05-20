@extends('layouts.public')

@section('title', 'Контакты')
@section('description', 'Контакты Xball')
@section('keywords', 'контакты bumperball харьков')

@section('content')
    <!--Main-->
    <main>
        <div class="profile-page">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title"><i class="ion-ios-home-outline"></i> Главная</a></li>
                    <li typeof="v:Breadcrumb" class="active"><a href="#" rel="v:url" property="v:title">Контакты</a></li>
                </ol>
                <div class="page-header clearfix">
                    <h1 class="name pull-left">Контакты</h1>
                </div>
                <div class="row">
                    <div class="col-xs-6"> 
                        <br/>               
                        <p>г. Харьков</p>
                        <p>
                            <b>Контактные телефоны:</b><br/>
                            0994059722, 0734823238 - Николай  <br/>
                            0995087807 - Руслан
                        </p>
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