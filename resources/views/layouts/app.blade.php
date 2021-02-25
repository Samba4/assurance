<!DOCTYPE html>

<html lang="en">

<!--  13:28  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Css Files -->
    <link href="{{asset('template/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/prettyphoto.css')}}" rel="stylesheet">
    <link href="{{asset('template/build/mediaelementplayer.css')}}" rel="stylesheet">
    <link href="{{asset('template/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/color-two.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/color-three.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/color-four.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bceb941b32.js" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Header \\-->
        <header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
            <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language">
                                <ul>
                                    <li><a href="https://simone-weil.ent.auvergnerhonealpes.fr">Simone Weil</a></li>
                                </ul>
                            </div>
                            <ul class="wm-stripinfo">
                                <li><a
                                        href="https://www.google.com/search?client=firefox-b-d&q=63+Avenue+Albert+Raimond%2C+42270+Saint-Priest-en-Jarez"><i
                                            class="wmicon-location"></i></a> 63 Avenue Albert Raimond, 42270
                                    Saint-Priest-en-Jarez</li>
                                <li><a href="tel:+33477921262"><i class="wmicon-technology4"></i></a>+33 4 77 92 12 62
                                </li>
                                <li><i class="wmicon-clock2"></i>{{Carbon\Carbon::parse()->format('j M Y G:i')}}</li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <li>
                                    @guest
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">Se connecter</a>
                                    @endguest
                                    @auth
                                    <a href="{{route('logout')}}">Se déconnecter</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                        {{ csrf_field() }}
                                    </form>
                                    @endauth
                                </li>
                                @guest
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                @endguest
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i
                                            class="wmicon-search"></i></a>
                                </li>
                                @auth
                                <li>
                                    <a href="#">{{Auth()->user()->username}}</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="{{route('home')}}" class="wm-logo"><img
                                    src="{{asset('template/images/assurancelog.jpg')}}" alt="" height="150"
                                    width="150"></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="{{route('home')}}">Menu</a></li>
                                        <li><a href="{{route('articles')}}">Actualités</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="{{route('articles')}}">Les actualités</a></li>
                                                @admin
                                                <li><a href="{{route('article.create')}}">Déposer une actualité</a></li>
                                                <li><a href="{{route('categorie.create')}}">Déposer une catégorie</a>
                                                </li>
                                                <li><a href="courses-detail.html">Modifier une actualité</a></li>
                                                <li><a href="courses-detail.html">Supprimer une actualité</a></li>
                                                @endadmin
                                            </ul>
                                        </li>
                                        <li class="active"><a href="{{route('jobs')}}">Jobs</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="{{route('jobs')}}">Nos offres</a></li>
                                                @auth
                                                <li><a href="{{route('jobs.create')}}">Déposer une offre</a></li>
                                                @endauth
                                                @admin
                                                <li><a href="courses-detail.html">Modifier une offre</a></li>
                                                <li><a href="courses-detail.html">Supprimer une offre</a></li>
                                                @endadmin
                                            </ul>
                                        </li>

                                        @auth
                                        <li><a href="{{route('compte.show', [Auth()->user()->username])}}">Mon
                                                compte</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="{{route('compte.show', [Auth()->user()->username])}}">Mon
                                                        compte</a></li>
                                                <li><a href="dashboard-courses.html">Tableau de bord</a></li>
                                                <li><a href="student-dashboard-favourite.html">Mes favoris</a></li>
                                                <li><a href="student-dashboard-my-courses.html">Mes articles</a></li>
                                                <li><a href="{{route('profil.edit', [Auth()->user()->username])}}">Réglages
                                                        du profil</a>
                                                </li>
                                                <li><a href="{{route('compte.edit', [Auth()->user()->username])}}">Réglages
                                                        du compte</a>
                                                </li>
                                            </ul>
                                        </li>
                                        @endauth
                                        @guest
                                        <li class="wm-megamenu-li"><a href="#">Partenaires</a></li>
                                        @endguest
                                        <li class="wm-megamenu-li"><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            @guest
                            <a href="#" class="wm-header-btn" data-toggle="modal" data-target="#ModalLogin">Se
                                connecter</a>
                            @endguest
                            @auth
                            <a href="{{route('logout')}}" class="wm-header-btn">Déconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                {{ csrf_field() }}
                            </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

        </header>
        <!--// Header \\-->

        @yield('content')

        @include('layouts.footer')

    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    @include('layouts.register')
                    @include('layouts.login')
                </div>
            </div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form">
                        <span class="wm-color">Que recherchez vous ?</span>
                        <form>
                            <ul>
                                <li> <input type="text" placeholder="Recherche..."> </li>
                                <li> <input type="submit" value="Recherche"> </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{asset('template/script/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/jquery.prettyphoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/fitvideo.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/skills.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/waypoints-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/build/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/script/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{asset('template/script/functions.js')}}"></script>

</body>

<!--  15:20  -->

</html>