@extends('layouts.app')

@section('content')
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>{{$id->intitule}}</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Menu</a></li>
                        <li><a href="{{route('jobs')}}">Nos offres d'emplois</a></li>
                        <li>{{$id->intitule}}</li>
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

                <div class="col-md-12">
                    <figure class="wm-event-countdown"><img src="{{asset('template/extra-images/event-detail-1.jpg')}}"
                            alt="">
                        <figcaption>
                            <h2>Postuler avant</h2>
                            <div id="wm-countdown"></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-9">
                    <!--// Editore \\-->
                    <div class="wm-detail-editore wm-custom-space">
                        <h3>{{$id->intitule}}</h3>

                        <h4>Entreprise</h4>
                        <p>{{$id->description_entreprise}}</p>
                        <p><strong>{{$id->job_lieu}}</strong></p>
                        @empty($id->profil)

                        @endempty
                        <h4>Profil recherché</h4>
                        <p>{{$id->profil}}</p>

                        <p>{{$id->description}}</p>



                        <div class="clearfix"></div>
                        @empty($id->aspect)
                        Pas d'aspects spécifiques liés à ce poste.
                        @endempty
                        <ul class="wm-list-style-icon">
                            <li>{{$id->aspect}}</li>
                        </ul>
                    </div>
                </div>
                <aside class="col-md-3">
                    <a class="wm-all-events" href="{{route('jobs.postule', $id)}}"
                        style="padding: 11px 95px;">Postuler</a>

                    <div class="wm-event-options">
                        <ul>
                            <li>
                                <i class="wmicon-time2"></i>
                                <span>Recrute depuis le</span>
                                <p>{{$id->created_at->format('j M Y')}}</p>
                            </li>
                            <li>
                                <i class="wmicon-clock2"></i>
                                <span>Prise de poste</span>
                                <p>{{$id->disponibilite}}</p>
                            </li>
                            <li>
                                <i class="wmicon-location"></i>
                                <span>Adresse</span>
                                <p>{{$id->entreprise_adresse}}, {{$id->ville}}, {{$id->pays}}.</p>
                            </li>
                            <li>
                                <i class="wmicon-black"></i>
                                <span>Société</span>
                                <p>{{$id->entreprise}}</p>
                            </li>
                            <li>
                                <i class="wmicon-book2"></i>
                                <span>Diplôme</span>
                                <p>{{$id->diplome}}</p>
                            </li>
                            <li>
                                <i class="wmicon-social7"></i>
                                <span>Contrat</span>
                                <p>{{$id->type}}</p>
                            </li>
                            <li>
                                <i class="wmicon-technology"></i>
                                <span>Langues demandées</span>
                                <p>Français</p>
                            </li>
                        </ul>
                    </div>
                    <div class="wm-buyticket-section">
                        <ul>
                            <li><span>{{$id->salaire}} € / mois</span></li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
@endsection