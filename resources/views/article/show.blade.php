@extends('layouts.app')

@section('content')
<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>{{$article->titre}}</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{route('articles')}}">Nos articles</a></li>
                        <li>{{$article->titre}}</li>
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
                    <div class="widget widget_articles">
                        <div class="wm-widget-title">
                            <h2>Articles récents</h2>
                        </div>
                        <ul>
                            @foreach ($recents as $recent)
                            <li>
                                <figure>
                                    <a href="#"><img src="{{asset('template/extra-images/blog-widget-1.jpg')}}"
                                            alt=""></a>
                                </figure>
                                <div class="wm-Article">
                                    <h6><a href="{{route('article.show', $recent->id)}}">{{$recent->titre}}</a></h6>
                                    <time datetime="2008-02-14 20:00">{{$article->created_at->diffForHumans()}}</time>
                                    <a href="#"><i class="wmicon-social"></i>12</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_categories">
                        <div class="wm-widget-title">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            @foreach ($categories as $categorie)
                            <li><a href="/articles?categorie={{$article->categorie->id}}">{{$categorie->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
                <div class="col-md-9">
                    <div class="wm-blog-single">
                        <figure class="wm-detail-thumb">
                            <img src="{{asset('template/extra-images/blog-detail.jpg')}}" alt="">
                        </figure>
                        <div class="wm-blog-author">
                            <div class="wm-blogauthor-left">
                                <img src="extra-images/blog-author.jpg" alt="">
                                <a class="wm-authorpost" href="#">Mise en ligne par <span>
                                        {{$article->user->nom}} {{$article->user->prenom}}</span></a>
                            </div>
                            <div class="wm-blogauthor-right">
                                <div class="wm-rating">
                                    <span class="rating-box" style="width:70%"></span>
                                </div>
                            </div>
                        </div>
                        <ul class="wm-blog-post-option">
                            <li>
                                <time datetime="2008-02-14 20:00">{{$article->created_at->format('Y-m-d')}}</time>
                            </li>
                            <li>
                                <a href="blog-detail.html">
                                    <i class="wmicon-social"></i> 12 comments
                                </a>
                            </li>
                            <li>
                                <a href="blog-detail.html">
                                    <i class="wmicon-folder2"></i>{{$article->categorie->name}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="wm-detail-editore">
                        <h2>{{$article->titre}}</h2>
                        <p> {{$article->texte}}</p>
                    </div>
                    <div class="wm-postreviews">
                        <div class="wm-widgettitle">
                            <h2>Espace <span> commentaires</span></h2>
                        </div>
                        <ul>
                            @foreach ($article->commentaires as $commentaire)
                            <li>
                                <div class="thumblist">
                                    <ul>
                                        <li>
                                            <h4><a href="#">{{$commentaire->user->nom}}
                                                    {{$commentaire->user->prenom}}</a></h4>
                                            <figure><a href="{{route('compte.show', $commentaire->user)}}"><img
                                                        src="{{asset('template/extra-images/reviews-1.jpg')}}"
                                                        alt=""></a></figure>
                                            <div class="wm-reviews-text">
                                                <span>{{$commentaire->created_at->diffForHumans()}}</span>
                                                <form action="{{url("{$article->path()}/{$commentaire->id}")}}"
                                                    method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                    <a href="#" class="wm-edit-icon"><i
                                                            class="fas fa-trash">supprimer</i></a>
                                                </form>
                                                <p>{{$commentaire->contenu}}</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="wm-form">
                        <div class="wm-widgettitle">
                            <h2>Poster<span> un commentaire</span></h2>
                        </div>
                        <form action="{{route('commentaire.store', $article)}}" method="POST">
                            {{ csrf_field() }}
                            <ul>
                                {{-- <li><input type="text" placeholder="Nom"></li>
                                <li><input type="text" placeholder="Prénom"></li> --}}
                                <li class="wm-full-form">
                                    <textarea name="contenu" placeholder="Votre commentaire"></textarea>
                                </li>
                                <li class="wm-full-form">
                                    <input type="submit" value="Commenter">
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            @guest
            <div class="alert alert-danger" role="alert">
                Pour poster un commentaire <a href="#" data-toggle="modal" data-target="#ModalLogin"
                    class="alert-link">veuillez vous connecter</a>.
            </div>
            @endguest
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
</div>
<!--// Main Content \\-->
@endsection