@extends('layouts.app')

@section('content')

@if (session('ok'))
<div class="container">
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('ok') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif

<body>
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">

        <!--// Main Banner \\-->
        <div class="wm-main-banner">
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img
                            src="{{asset('Template/extra-images/banner-view1-1.jpg')}}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img
                            src="{{asset('Template/extra-images/banner-view1-2.jpg')}}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img
                            src="{{asset('Template/extra-images/banner-view1-3.jpg')}}" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img
                            src="{{asset('Template/extra-images/banner-view1-4.jpg')}}" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>BTS Assurance</h1>
                        <p>Ce diplôme forme des techniciens appelés à exercer des activités à la fois commerciales
                            et de gestion (de la
                            souscription au règlement des sinistres), en assurances de biens et de responsabilité ou en
                            assurance de personnes.
                        </p>
                        <a href="{{route('assurance')}}" class="wm-banner-btn">Voir plus</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Simone Weil</h1>
                        <p>Un lycée à taille humaine, 900 lycéens et étudiants, dans un cadre rénové et un climat
                            paisible favorables au travail.</p>
                        <a href="{{route('weil')}}" class="wm-banner-btn">Voir plus</a>
                    </div>
                </div>
            </div>

        </div>
        <!--// Main Banner \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content">

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Trouvez un article</h3>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="wm-radio">
                                                <div class="wm-radio-partition">
                                                    <input id="male" type="radio" name="gender" name="male">
                                                    <label for="male">Par catégorie</label>
                                                </div>
                                                <div class="wm-radio-partition">
                                                    <input id="female" type="radio" name="gender" name="female">
                                                    <label for="female">Par titre</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <input type="text" name="Titre" placeholder="Titre de l'article">
                                            <i class="wmicon-search"></i>
                                        </li>
                                        <li>
                                            <div class="wm-apply-select">
                                                <select>
                                                    <option>catégorie</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li> <input type="submit" value="Rechercher"> </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="#">catégorie</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-courses-popular-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wm-fancy-title">
                                <h2>Articles <span>les plus vus</span></h2>
                            </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img
                                                        src="{{asset('Template/extra-images/papular-courses-1.jpg')}}"
                                                        alt="">
                                                    <span class="wm-popular-hover"> <small>voir l'article</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="{{asset('Template/extra-images/papular-courses-thumb-1.jpg')}}"
                                                        alt="">
                                                    <h6><a href="#">Nom.
                                                            Prénom</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Titre de la catégorie</a></h6>
                                                <div class="wm-courses-price">
                                                    <span>Date de création</span>
                                                </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>
                                                            342</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>
                                                            10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-whychooseus-full">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="whychooseus-list">
                        <div class="wm-fancy-title">
                            <h2>Pourquoi <span>rejoindre cette formation ?</span></h2>
                        </div>
                        <ul class="row">
                            <li class="col-md-4">
                                <span>13 000</span>
                                <h6>recrutement chaque années dans l'assurance</h6>
                            </li>
                            <li class="col-md-4">
                                <span>70%</span>
                                <h6>des étudiants trouvent un emploi à la suite de leur obtention du diplôme
                                </h6>
                            </li>
                            <li class="col-md-4">
                                <span>100%</span>
                                <h6>de nouvelles opportunités professionnels</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-questions-studying">
                        <img src="extra-images/ask-questoin-bg.png" alt="">
                        <h3 class="wm-color">Des questions à propos de votre orientation?</h3>
                        <p>Nous avons une équipe d'étudiants et de professeurs prêts à vous répondre</p>
                        <a class="wm-banner-btn" href="#">Demandez maintenant</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-learn-listing-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-fancy-title">
                        <h2>Tu pourras <span>apprendre</span></h2>
                    </div>
                    <div class="wm-learn-listing">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-1.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Culture générale</h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-2.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Environnement économique juridique et managérial de l’assurance</h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-3.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Communication et gestion de la relation client</h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-4.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Techniques d’assurances</h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-2.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Projets professionnel appliqué</h2>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="{{asset('template/extra-images/learn-listing-2.png')}}"
                                            alt=""></a>
                                    <figcaption>
                                        <h2>Anglais</h2>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-latestevents-full">
        <div class="container">
            <div class="row">

                <div class="col-md-9 wm-top-spacer">
                    <h2 class="wm-simple-title">Nos derniers événements</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wm-event wm-latest-event">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="#"><img src="extra-images/latest-event-1.png" alt=""></a>
                                        </figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Out of This World: The Family Fun
                                                    Day</a></h6>
                                            <time datetime="2008-02-14 20:00">21/04/2016</time>
                                            <p>Join us for outer-space themed games, prizes, science & talks
                                                about careers in the UK.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-event wm-latest-event">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="#"><img src="extra-images/latest-event-2.png" alt=""></a>
                                        </figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Shakespeare at Balliol in those
                                                    five acts</a></h6>
                                            <time datetime="2008-02-14 20:00">19/04/2016</time>
                                            <p>A.C. Bradley and J.C. Maxwell get down to serious criticism;
                                                another Balliol writer launches the.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-testimonial-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-fancy-title">
                        <h2>Ce que <span>les gens disent</span></h2>
                        <p>a propos de ce BTS.</p>
                    </div>
                    <div class="wm-testimonial-slider">
                        <div class="wm-testimonial-slider-wrap">
                            <p>Les enseignants sont à l'écoute et le dispositif mis en place pour
                                l'accompagnement personnalisé implique tous les
                                enseignants. Les locaux sont en cours de rénovation et la cantine est une des
                                meilleures de l'académie n'en déplaise à
                                ceux qui n'aiment pas les légumes.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-1.png"
                                        alt=""></a>
                                <figcaption>
                                    <h5><a href="#">VM</a></h5> <span>Saint-Etienne, France</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="wm-testimonial-slider-wrap">
                            <p>J'ai pu avoir de très bon enseignants sur mes deux ans études. L'établissement est
                                correcte.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-2.png"
                                        alt=""></a>
                                <figcaption>
                                    <h5><a href="#">Anonyme</a></h5> <span>Paris, France</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="wm-testimonial-slider-wrap">
                            <p>De très bons intervenants. Notre prof référent est vraiment super ! Il vous conseille et
                                vous suit tout au long de ces
                                deux années.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-1.png"
                                        alt=""></a>
                                <figcaption>
                                    <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-ourhistory-full">
        <span class="wm-light-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="wm-subscribe-form">
                        <h2>Toujours pas convaincu?</h2>
                        <p>Laisse tes coordonnées et nous te recontacterons.</p>
                        <form>
                            <input type="text" placeholder="Nom">
                            <input type="email" placeholder="E-mail">
                            <input type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-news-grid-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-fancy-title">
                        <h2>Articles <span>récents</span></h2>
                        <p>A ne surtout pas manquer</p>
                    </div>
                    <div class="wm-news wm-news-grid">
                        <ul class="row">
                            <li class="col-md-4">
                                <div class="wm-newsgrid-text">
                                    <ul class="wm-post-options">
                                        <li>01/01/2020</li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 12 comments</a></li>
                            </li>
                        </ul>
                        <h5><a href="#" class="wm-color">Lorem ipsum</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis delectus incidunt odit
                            repellendus doloribus minima, vel fugiat harum velit nulla similique temporibus asperiores
                            architecto modi impedit repudiandae cumque porro obcaecati?</p>
                        <a class="wm-banner-btn" href="#">Lire l'article</a>
                    </div>
                    </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!--// Main Section \\-->




</body>
@endsection