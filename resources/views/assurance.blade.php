@extends('layouts.app')

@section('content')

<style>
    .wm-mini-header {
        background-image: url("{{asset('Template/images/sweil.jpeg')}}");
        background-repeat: no-repeat;
        text-align: center;
        padding: 75px 0px 69px 0px;
        position: relative;
    }
</style>

<body>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">


        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Notre formation</h1>
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="{{route('home')}}">Accueil</a></li>
                                <li><a href="{{route('articles')}}">Articles</a></li>
                                <li>BTS Assurance</li>
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
                            <div class="widget widget_course-price">
                                <ul>
                                    <li><a href="#"><i class=" wmicon-social7"></i>70 étudiants</a></li>
                                    <li><a href="#"><i class=" wmicon-clock2"></i><time datetime="2017-02-14">812h par
                                                an</time></a></li>
                                    <li><a href="#">
                                            <div class="wm-levelrating">
                                                <span class="rating-box" style="width:60%"></span>
                                            </div>
                                            Intermediaire
                                        </a></li>
                                    <li><a href="#"><i class=" wmicon-technology"></i>Langue vivante facultative</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_professor-info">
                                <div class="wm-widget-title">
                                    <h2>Professeur référent</h2>
                                </div>
                                <div class="wm-Professor-info">
                                    <h4><a href="#">S. Bounouar</a></h4>
                                    <span>15 ans d'experience</span>
                                </div>
                            </div>
                            <div class="widget widget_courses-program">
                                <div class="wm-widget-title">
                                    <h2>Emploi du temps</h2>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Lundi</a>
                                        <span>8:00 - 16:00</span>
                                    </li>
                                    <li>
                                        <a href="#">Mardi</a>
                                        <span>9:00 - 17:00</span>
                                    </li>
                                    <li>
                                        <a href="#">Mercredi</a>
                                        <span>8:00 - 17:00</span>
                                    </li>
                                    <li>
                                        <a href="#">Jeudi</a>
                                        <span>8:00 - 17:00</span>
                                    </li>
                                    <li>
                                        <a href="#">Vendredi</a>
                                        <span>8:00 - 17:00</span>
                                    </li>
                                    <li>
                                        <a href="#">Samedi</a>
                                        <span>Fermé</span>
                                    </li>
                                    <li>
                                        <a href="#">Dimanche</a>
                                        <span>Fermé</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <div class="col-md-9">
                            <p class="wm-title-full">Le BTS Assurance s’effectue en deux ans après un bac général. C’est
                                un diplôme de niveau
                                bac + 2 qui se prépare en
                                formation initiale mais aussi en alternance dans des établissements publics et privés.
                                C’est un diplôme d’Etat de niveau
                                III délivré par le ministère de l’Enseignement supérieur et de la Recherche.</p>

                            <div class="wm-blog-single wm-courses">
                                <iframe width="971" height="546" src="{{asset('template/assurancebts.mp4')}}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen autoplay></iframe>
                            </div>
                            <div class="wm-our-course-detail">
                                <div class="wm-title-full">
                                    <h2>Objectifs du diplôme</h2>
                                </div>
                                <p class="wm-text">Le titulaire du BTS assurance est capable de prospecter la clientèle,
                                    d’analyser ses besoins et de lui proposer des
                                    contrats d’assurances ou d’assistance, de gérer des dossiers de sinistres. La
                                    formation prépare aux fonctions
                                    commerciales, techniques et de gestion, de la souscription et de la relation client.
                                </p>

                                <div class="wm-courses-getting-started">
                                    <div class="wm-title-full">
                                        <h2>Organisation et contenu de la formation</h2>
                                    </div>
                                    <div class="wm-courses-started">
                                        <span>Enseignement générale</span>
                                        <ul class="wm-courses-started-listing">
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Culture générale</a></h6>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">3h par semaine</time></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Environnement économique juridique et managérial de
                                                            l’assurance</a></h6>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">4h par semaine</time></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Communication et gestion de la relation client</a>
                                                    </h6>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">4h par semaine</time></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wm-courses-started">
                                        <span>Enseignement professionnel</span>
                                        <ul class="wm-courses-started-listing">
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Techniques d’assurances</a>
                                                    </h6>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">12h par semaine</time></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Projets professionnels appliquées</a>
                                                    </h6>
                                                    <span><a href="#" class=" wmicon-clock2"></a><time
                                                            datetime="2017-02-14">3h par semaine</time></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wm-courses-started">
                                        <span>Enseignement facultatif</span>
                                        <ul class="wm-courses-started-listing">
                                            <li>
                                                <a href="#" class="wmicon-pen"></a>
                                                <div class="wm-courses-started-text">
                                                    <h6><a href="#">Langues vivantes 2</a>
                                                    </h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="wm-title-full">
                                    <h2>Débouchés du diplôme</h2>
                                </div>
                                <p class="wm-text">Le titulaire du BTS assurance exerce principalement ses activités
                                    dans les sociétés d’assurance ou de réassurance, les
                                    agences générales d’assurances, les cabinets de courtage, les cabinets d’expertises
                                    en assurances mais aussi au sein
                                    d’entreprises industrielles ou commerciales et auprès des collectivités
                                    territoriales.
                                    </br>
                                    Le secteur bancaire est aussi un
                                    débouché possible.
                                    </br>
                                    Les métiers ouverts aux BTS assurance sont chargé de clientèle, téléconseiller,
                                    agent général d’assurances, courtier,
                                    rédacteur, souscripteur.
                                    </br>
                                    Evolution de carrière :
                                    Avec de l’expérience et une formation complémentaire, souvent interne, le
                                    professionnel pourra évoluer vers des
                                    fonctions d’encadrement ou devenir inspecteur commercial ou gestionnaire financier.
                                    </br>
                                    Enfin, les professions d’expert ou
                                    d’actuaire, sans être inaccessibles, nécessitent un niveau bac + 5.
                                </p>

                                <div class="wm-title-full">
                                    <h2>Poursuites d'études</h2>
                                </div>
                                <p class="wm-text">
                                    Le BTS assurance permet une entrée dans la vie active.
                                    </br>
                                    Cependant, il est possible de
                                    poursuivre ses études avec une licence pro (bac + 3) à dominante assurance, relation
                                    client ou commercialisation de
                                    produits, voire avec un master
                                    professionnel assurance (bac + 5).
                                    </br>
                                    Il est également possible de rejoindre le cursus universitaire de type licence (L3)
                                    en économie, gestion, finance,
                                    banque, droit.
                                    </br>
                                    L’entrée à l’Enass (École nationale d’assurances) est également envisageable. Des
                                    écoles privées spécialisées
                                    accueillent aussi des titulaires du BTS assurance.
                                    </br>
                                    Des écoles de commerce restent accessibles sur dossier ou concours.
                                </p>

                                <div class="wm-courses-info">
                                    <div class="wm-title-full">
                                        <h2>Ce que tu vas apprendre</h2>
                                    </div>
                                    <ul>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                        <li><a href="#" class="wmicon-lock"></a>Exemple d'exemple</li>
                                    </ul>
                                </div>
                                <div class="wm-certification-listing">
                                    <div class="wm-title-full">
                                        <h2>Métiers accessibles avec ce diplôme</h2>
                                    </div>
                                    <ul>
                                        <li><a href="#" class="wmicon-mark"></a>Agent général d'assurances</li>
                                        <li><a href="#" class="wmicon-mark"></a>Conseiller en assurances</li>
                                        <li><a href="#" class="wmicon-mark"></a>Courtier</li>
                                        <li><a href="#" class="wmicon-mark"></a>Gestionnaire de contrats
                                            d'assurance</li>
                                        <li><a href="#" class="wmicon-mark"></a>Guichetier</li>
                                        <li><a href="#" class="wmicon-mark"></a>Assistant-assureur.</li>
                                        <li><a href="#" class="wmicon-mark"></a>Assureur</li>
                                        <li><a href="#" class="wmicon-mark"></a>Chargé de clientèle</li>
                                        <li><a href="#" class="wmicon-mark"></a>Chargé de clientèle banque.</li>
                                        <li><a href="#" class="wmicon-mark"></a>Chargé d'indemnisation.</li>
                                        <li><a href="#" class="wmicon-mark"></a>Conseiller en produits bancaires et
                                            d'assurances.</li>
                                        <li><a href="#" class="wmicon-mark"></a>Collaborateur d'agence.</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->


    </div>
    <!--// Main Wrapper \\-->

</body>

<!-- courses-detail21:28  -->

</html>


@endsection

<!-- courses-detail21:28  -->

</html>