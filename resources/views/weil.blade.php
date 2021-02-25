@extends('layouts.app')

@section('content')

<body>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">


        <!--// Mini Header \\-->
        <div class="wm-mini-header" style="background-image: url({{asset('template/images/sweil.jpeg')}})"> <span
                class="wm-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Lieu de formation</h1>
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="{{route('home')}}">Accueil</a></li>
                                <li><a href="#">Articles</a></li>
                                <li>Simone Weil</li>
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
                                    <li><a href="#"><i class=" wmicon-social7"></i>950 lycéens et étudiants</a></li>
                                </ul>
                            </div>
                            <div class="widget widget_professor-info">
                                <div class="wm-widget-title">
                                    <h2>Principal</h2>
                                </div>
                                <div class="wm-Professor-info">
                                    <h4><a href="#">S. SSSSSS</a></h4>
                                    <span>15 ans d'experience</span>
                                </div>
                            </div>
                        </aside>
                        <div class="col-md-9">
                            <div class="wm-blog-single wm-courses">
                                <img src="{{asset('template/extra-images/classesi.jpg')}}" alt="">
                            </div>
                            <div class="wm-our-course-detail">
                                <div class="wm-title-full">
                                    <h2>Lorem ipsumt</h2>
                                </div>
                                <p class="wm-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit beatae
                                    ab culpa sunt fugit adipisci! Earum, ex dolorum ea dignissimos similique laboriosam
                                    voluptatem voluptatibus non velit quia ratione maxime sed.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam temporibus a
                                    consequuntur omnis, vero dolor, quisquam tempore vitae dicta laborum odio maxime
                                    aliquam? Modi distinctio quaerat, in dolor odit maxime.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quaerat eum
                                    libero? Voluptas nostrum atque autem veritatis eum nam, deleniti dicta. Vel beatae
                                    expedita illum enim fugiat doloribus quas. Rem.
                                </p>
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