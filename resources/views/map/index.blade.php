@extends('layouts.public')

@section('title', 'Стадионы')
@section('description', 'Стадионы Xball Харьков ')
@section('keywords', 'Стадионы харьков бампербол')

@section('content')
    <!--Main-->
    <main>
        <div class="profile-page">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title"><i class="ion-ios-home-outline"></i> Главная</a></li>
                    <li typeof="v:Breadcrumb" class="active"><a href="#" rel="v:url" property="v:title">Карта стадионов</a></li>
                </ol>
                <div class="page-header clearfix">
                    <h1 class="name pull-left">Карта стадионов</h1>
                </div>
                <div class="row">
                    <div class="right-content" id="collapseMap">
                        <div id="map" class="map">
                            
                        </div>
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