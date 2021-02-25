@extends('layouts.app')
@section('content')
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>{{$user->nom}} {{$user->prenom}}</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{url("/compte/{$user->username}")}}">Profil</a></li>
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
                <aside class="col-md-4">
                    <div class="wm-student-dashboard-nav">
                        <div class="wm-student-nav">
                            <figure>
                                <a href="#"><img src="{{asset('template/extra-images/students-setting-1.jpg')}}"
                                        alt=""></a>
                            </figure>
                            <div class="wm-student-nav-text">
                                <h6>{{$user->prenom}} {{$user->nom}}</h6>
                                @if (Auth::user()->id == $user->id)
                                <a href="{{route('profil.edit', ['username' => $user->username])}}">Modifier profil</a>
                                @endif
                            </div>


                            <ul>
                                <li class="active">
                                    <a href="#">
                                        <i class="wmicon-avatar"></i>
                                        @if (Auth::user()->id == $user->id)
                                        Mon compte
                                        @else
                                        Son compte
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-favorite"></i>
                                        @if (Auth::user()->id == $user->id)
                                        Mes favoris
                                        @else
                                        Ses favoris
                                        @endif
                                    </a>

                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-book"></i>
                                        @if (Auth::user()->id == $user->id)
                                        Mes articles
                                        @else
                                        Ses articles
                                        @endif
                                    </a>
                                </li>
                                @if (Auth::user()->id == $user->id)
                                <li>
                                    <a href="{{route('profil.edit', ['user' => $user->username])}}">
                                        <i class="wmicon-three"></i>
                                        Réglages du profil
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('compte.edit', ['user' => $user])}}">
                                        <i class="wmicon-three"></i>
                                        Réglages du compte
                                    </a>
                                </li>
                                @endif
                                @auth
                                <li>
                                    <a href="{{route('logout')}}">
                                        <i class="wmicon-arrow"></i>
                                        Se déconnecter
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                @endauth
                                @guest
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">
                                        <i class="wmicon-school"></i>
                                        Se connecter
                                    </a>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>

                </aside>
                <div class="col-md-8">
                    <div class="wm-student-profile-info">
                        <div class="wm-student-dashboard-profile">
                            <div class="wm-plane-title">
                                <h2>{{$user->compte->titre}}</h2>
                            </div>
                            <ul class="row">
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon
                                            href=" @empty($user->compte->url) # @endempty {{$user->compte->url}}"><i
                                                class="wmicon-computer"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Site internet</span>
                                            @empty($user->compte->url)
                                            Pas de site internet
                                            @endempty
                                            <a href="#">{{$user->compte->url}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="mailto:{{$user->email}}"><i
                                                class="wmicon-web2"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Email</span>
                                            <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="fa fa-graduation-cap"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Rôle</span>
                                            <a href="#">
                                                @if ($user->role == 'admin')
                                                Gestionnaire du site
                                                @else
                                                Utilisateur simple
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @empty($user->compte->description)
                            <p>Bienvenue sur le profil de {{$user->prenom}} {{$user->nom}}.</p>
                            Cet utilisateur n'a pas encore compléter sa description.
                            @endempty
                            <p>{{$user->compte->description}}</p>
                        </div>

                        <div class="wm-profile-info">

                            <div class="wm-title-full">
                                <h5>Ses articles publiées</h5>
                            </div>
                            <div class="wm-article">
                                <ul>
                                    <li class="wm-profile-info-right">
                                        <span>Disponible en ligne</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="wm-article">
                                @foreach ($user->articles as $article)
                                <ul>
                                    <li class="wm-profile-start">
                                        <div class="wm-profile-detail-info">
                                            <h6><a
                                                    href="{{route('article.show', $article->id)}}">{{$article->titre}}</a>
                                            </h6>
                                            <span>{{substr($article->texte, 0,50)}}</span>
                                        </div>
                                    </li>
                                    <li><a href="#" class="wm-edit-icon"><i class="wmicon-tool3"></i>Modifier</a></li>
                                    <li><a href="#" class="wm-edit-icon">Supprimer</a></li>
                                </ul>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection