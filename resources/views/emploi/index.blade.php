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
                    <h1>Offres d'emploi</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{route('jobs.create')}}">Déposer une offre</a></li>
                        <li>Nos offres d'emploi</li>
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
                        <h3 class="wm-short-title wm-color">Trouvez un emploi</h3>
                        <p>Que recherchez-vous ?</p>
                        <form action="{{route('jobs.search')}}">
                            <ul>

                                <li> <input type="text" name="pe" placeholder="Intitulé de poste ou entreprise"></i>
                                </li>
                                <li> <input type="text" name="vp" placeholder="Ville ou département"></i> </li>

                                <li> <input type="submit" value="Rechercher"> </li>
                            </ul>
                        </form>
                    </div>
                    <div class="widget widget_check-box">
                        <h5>Estimation du salaire</h5>
                        <div class="wm-range-slider">
                            <div id="slider-range"
                                class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                    style="left: 0%; width: 80%;"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 0%;"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 80%;"></span>
                            </div>
                            <form>
                                <input id="amount" type="text" readonly="" value="0€">
                                <input type="submit" value="Supprimer filtre">
                            </form>
                        </div>
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
                    <div class="widget widget_check-box">
                        <h5>Type de poste</h5>
                        <ul>
                            <li>
                                <input id="avail5" type="checkbox">
                                <label for="avail5">
                                    <span></span>
                                    Temps plein
                                </label>
                            </li>
                            <li>
                                <input id="avail6" type="checkbox">
                                <label for="avail6">
                                    <span></span>
                                    CDI
                                </label>
                            </li>
                            <li>
                                <input id="avail9" type="checkbox">
                                <label for="avail9">
                                    <span></span>
                                    Intérim
                                </label>
                            </li>
                            <li>
                                <input id="avail10" type="checkbox">
                                <label for="avail10">
                                    <span></span>
                                    Temps partiel
                                </label>
                            </li>
                            <li>
                                <input id="avail11" type="checkbox">
                                <label for="avail11">
                                    <span></span>
                                    CDD
                                </label>
                            </li>
                            <li>
                                <input id="avail12" type="checkbox">
                                <label for="avail12">
                                    <span></span>
                                    Stage
                                </label>
                            </li>
                            <li>
                                <input id="avail13" type="checkbox">
                                <label for="avail13">
                                    <span></span>
                                    Apprentissage
                                </label>
                            </li>
                            <li>
                                <input id="avail14" type="checkbox">
                                <label for="avail14">
                                    <span></span>
                                    Contrat pro
                                </label>
                            </li>
                            <li>
                                <input id="avail15" type="checkbox">
                                <label for="avail15">
                                    <span></span>
                                    Freelance / Indépendant
                                </label>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="col-md-9">
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
                                <option>Par type de poste</option>
                                <option>Temps plein</option>
                                <option>CDI</option>
                                <option>CDD</option>
                                <option>Temps partiel</option>
                                <option>Intérim</option>
                                <option>Stage</option>
                                <option>Apprentissage</option>
                                <option>Contrat pro</option>
                                <option>Freelance / Indépendant</option>
                            </select>
                        </div>
                    </div>

                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                        @foreach ($jobs as $job)
                        <ul class="row">
                            <li class="col-md-12">
                                <div class="wm-courses-popular-wrap">
                                    <div class="wm-popular-courses-text">

                                        <h6><a href="{{route('jobs.show', $job->id)}}">{{$job->intitule}}</a></h6>
                                        <div class="col-md-12">
                                            <ul class="wm-icon-list-style">
                                                <li>
                                                    <a href="{{route('jobs.like', $job->id)}}" name="liked"><i
                                                            class="wmicon-favorite"></i></a>
                                                </li>

                                                <li>
                                                    <i class="wmicon-suitcase"></i>
                                                    <span>{{$job->entreprise}}</span>
                                                </li>
                                                <li>
                                                    <i class="wmicon-location"></i>
                                                    {{$job->ville}} - {{$job->departement}}
                                                    ({{substr($job->postale, 0,2)}})
                                                </li>
                                                <li>
                                                    <a class="bouton-postule"
                                                        href="{{route('jobs.show', $job->id)}}">Voir
                                                        l'offre</a>

                                                </li>
                                            </ul>
                                        </div>

                                        <p>{{substr($job->description, 0, 500)}}</p>
                                        <div class="wm-courses-price">
                                            <span>{{number_format($job->salaire *100 / 100, 2, ',', '')}}€
                                                / mois</span>
                                        </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i
                                                        class="wmicon-time2"></i>{{$job->created_at->diffForHumans()}}</a>
                                            </li>
                                            <li><a href="#" class="wm-color"><i
                                                        class="wmicon-clock2"></i>{{$job->type}}</a>
                                            </li>
                                            <li><a href="#" class="wm-color"><i
                                                        class="wmicon-location"></i>{{$job->departement}}</a></li>
                                            <li>
                                                <a href="#" class="wm-color"><i class="wmicon-suitcase"></i>
                                                    {{$candidature->count()}}
                                                    candidatures déjà soumise</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        @endforeach
                    </div>

                    {{$jobs->links()}}
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection