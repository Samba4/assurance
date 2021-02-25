@extends('layouts.app')

@section('content')
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Réglages du compte</h1>
                </div>

                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{route('compte.show', ['username' => $user->username])}}">Profil</a>
                        </li>
                        <li>Réglages du compte</li>
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
                                <a href="{{route('compte.show', ['username' => $user->username])}}">Retour profil</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{route('compte.show', ['username' => $user->username])}}">
                                        <i class="wmicon-avatar"></i>
                                        Mon compte
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-favorite"></i>
                                        Mes favoris
                                    </a>

                                </li>
                                <li>
                                    <a href="#">
                                        <i class="wmicon-book"></i>
                                        Mes articles
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('profil.edit', ['user' => $user->username])}}">
                                        <i class="wmicon-three"></i>
                                        Réglages du profil
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{route('compte.edit', ['username' => $user->username])}}">
                                        <i class="wmicon-three"></i>
                                        Réglages du compte
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}">
                                        <i class="wmicon-arrow"></i>
                                        Se déconnecter
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="col-md-8">
                    <div class="wm-student-settings-info">
                        <div class="wm-student-dashboard-settings">
                            <div class="wm-plane-title">
                                <h2>Réglages du compte</h2>
                            </div>
                            <div class="wm-student-dashboard-form wm-student-dashboard">
                                <form method="POST" action="{{route('compte.update', ['user' => $user])}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <ul>
                                        <li><input type="text" name="nom" value="{{$user->nom}}" placeholder="Nom"
                                                required></li>

                                        <li><input type="text" name="prenom" value="{{$user->prenom}}"
                                                placeholder="Prenom" required></li>
                                        <li><input type="text" name="username" value="{{$user->username}}"
                                                placeholder="Pseudonyme" required>
                                        </li>
                                        <li><input type="text" name="email" value="{{$user->email}}"
                                                placeholder="Adresse e-mail" required></li>
                                        <div class="wm-student-dashboard-form wm-student-dashboard">
                                            <li><input type="submit" value="Modifier mon compte"></li>
                                        </div>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection