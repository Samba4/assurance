@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('jobs//css/style.css')}}">


<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Postuler à l'offre de {{$id->entreprise}}</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Menu</a></li>
                        <li><a href="{{route('jobs')}}">Nos offres</a></li>
                        <li><a href="{{route('jobs.show', $id->id)}}">Offre n°{{$id->id}}</a></li>
                        <li>Postuler</li>
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
            <form action="{{route('candidature.store', $id)}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">Nom</label>
                            <input type="text" class="form-control" id="postal_code" name="nom" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputLoction">Prénom</label>
                            <input type="text" class="form-control" name="prenom" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputCompany">Adresse E-mail</label>
                            <input type="email" class="form-control" name="entreprise" required />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputCompany">Numéro de téléphone</label>
                            <input type="text" class="form-control" name="telephone" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputCompany">Ville</label>
                            <input type="text" class="form-control" name="ville" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputLongDescription">Lettre de motivation</label>
                    <textarea class="form-control large" name="content"
                        placeholder="Pourquoi vous recrutez ? Quels sont vos atouts ?" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Curriculum Vitae</label>
                    <div class="box text-center">
                        <input type="file" name="attachment" id="file-7" class="inputfile1 inputfile-4"
                            data-multiple-caption="{count} files selected" multiple />
                        <label for="file-7">
                            <i>
                                <img src="{{asset('template/job-post.png')}}" class="imtges" alt="">
                            </i>
                            <span>Ajouter votre<i class="font-color-orange">Cv</i></span>
                        </label>
                    </div>
                    <button type="submit" class="btn Post-Job-Offer">Candidater</button>
                </div>
        </div>
        </form>
    </div>
    </div>
</section>

@endsection