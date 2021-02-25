@extends('layouts.app')

@section('content')

<style>
    .wmicon-favorite:hover {
        color: #dd024b;
    }

    .bouton-postule:hover {
        color: #ffffff;
        background-color: #222845;
    }

    .bouton-postule {
        border: 2px solid #222845;
        border-radius: 25px;
        color: #222845;
        float: left;
        font-size: 12px;
        font-weight: 600;
        margin: 0px 19px 10px 0px;
        padding: 0px 39px;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }
</style>

<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Nos actualités</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="#">Créer une actualité</a></li>
                        <li>Nos actualités</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Mini Header \\-->

<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">

                <aside class="col-md-3">
                    <div class="widget wm-search-course">
                        <h3 class="wm-short-title wm-color">Trouvez une actualité</h3>
                        <p>Que recherchez-vous ?</p>
                        <form action="{{route('article.search')}}" method="GET">
                            {{ csrf_field() }}
                            <ul>

                                <li> <input type="text" name="titre"
                                        placeholder="Titre, texte ou description de l'article"></i>
                                </li>
                                <li> <input type="text" name="auteur" placeholder="Auteur de cette article"></i>
                                </li>

                                <li> <input type="submit" value="Rechercher"> </li>
                            </ul>
                        </form>
                    </div>
                    <div class="widget widget_check-box">
                        <h5>Date de publication</h5>
                        <ul>
                            <li>
                                <input id="avail1" type="checkbox">
                                <label for="avail1">
                                    <span></span>
                                    Dernières 24 heures
                                </label>
                            </li>
                            <li>
                                <input id="avail7" type="checkbox">
                                <label for="avail7">
                                    <span></span>
                                    3 derniers jours
                                </label>
                            </li>
                            <li>
                                <input id="avail8" type="checkbox">
                                <label for="avail8">
                                    <span></span>
                                    7 derniers jours
                                </label>
                            </li>
                            <li>
                                <input id="avail4" type="checkbox">
                                <label for="avail4">
                                    <span></span>
                                    14 derniers jours
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_categories">
                        <div class="wm-widget-title">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            @forelse ($categories as $categorie)
                            <li><a href="/articles?categorie={{$categorie->id}}">{{$categorie->name}}</a>
                            </li>
                            @empty
                            Pas de catégorie à ce nom
                            @endforelse
                        </ul>
                    </div>
                </aside>

                <div class=" col-md-9">
                    <div class="wm-filter-box">
                        <div class="wm-apply-select">
                            <select>
                                <option>Par date de publication</option>
                                <option>Dernières 24 heures</option>
                                <option>3 derniers jours</option>
                                <option>7 derniers jours</option>
                                <option>14 derniers jours</option>
                            </select>
                        </div>
                        <div class="wm-apply-select">
                            <select>
                                @foreach ($categories as $categorie)
                                <option>{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wm-view-btn">
                            <a href="#" class="wmicon-squares active"></a>
                            <a href="#" class="wmicon-signs"></a>
                        </div>
                    </div>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                        @foreach ($articles as $article)
                        <ul class="row">
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <div class="wm-popular-courses-text">

                                        <h6><a href="#">{{$article->titre}}</a></h6>
                                        <div class="col-md-12">
                                            <ul class="wm-icon-list-style">
                                                <li>
                                                    <a href="#"><i class="wmicon-favorite"></i></a>
                                                    <span>{{$article->id}}</span>
                                                </li>

                                                <li>
                                                    <i class="wmicon-suitcase"></i>
                                                    <span>{{$article->categorie->name}}</span>
                                                </li>
                                                <li>
                                                    <a class="bouton-postule"
                                                        href="{{route('article.show', $article->id)}}">Voir
                                                        l'article</a>

                                                </li>
                                            </ul>
                                        </div>

                                        <p>{{substr($article->texte, 0, 500)}}</p>
                                        <div class="wm-courses-price">
                                            <span>{{$article->created_at->format('Y-m-d')}}</span>
                                        </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i
                                                        class="wmicon-clock2"></i>{{$article->created_at->diffForHumans()}}</a>
                                            </li>
                                            <li><a href="#" class="wm-color"><i
                                                        class="wmicon-author"></i>{{$article->type}}</a>
                                            </li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-book2"></i>par
                                                    {{$article->user->nom}} {{$article->user->nom}}</a>
                                            </li>
                                            <li>
                                                <a href="#" class="wm-color"><i class="wmicon-tool2"></i>
                                                    x
                                                    vue(s)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        @endforeach
                    </div>

                    {{$articles->links()}}
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection