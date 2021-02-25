@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('jobs//css/style.css')}}">


<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Créer une catégorie</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Menu</a></li>
                        <li><a href="{{route('articles')}}">Nos articles</a></li>
                        <li>Créer une catégorie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Mini Header \\-->
<section id="post_job">
    <div class="container">
        <div class="vertical-space-60"></div>
        <div class="job-post-box">
            <form action="{{route('categorie.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputJobtitle">Nom de la catégorie</label>
                    <input type="text" class="form-control" name="name" required />
                </div>
                <button type="submit" class="btn Post-Job-Offer">Ajouter</button>
        </div>
    </div>
    </form>
</section>

@endsection