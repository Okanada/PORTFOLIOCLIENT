







{{-- ON APPEL LE LAYOUTS --}}

@extends('layouts.front')





   
    <!-- ----------------------------------------------------------------------------------------------------------------------- -->

    <!-- Début de section 1 -->
@section('content')
    <section id="section1">
        <div class="container">
            <!-- titre de la section 1 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 id="titreagencepure">
                        L'AGENCE PURE
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Fin titre section 1 -->

            <!-- Série de paragraphes 1 -->
            <p>L’agence Pure est une agence de communication 360°, spécialisée dans le conseil et la stratégie en communication
                des entreprises. Notre objectif est de vous accompagner dans la réflexion et la réalisation de votre communication.</p>
            <p>
                Grâce à son studio graphique print, 3D, et son studio web, l’Agence Pure, vous propose de mener à bien toute votre communication.
            </p>
            <p>Qu’il s’agisse du lancement commercial de votre nouveau produit ou service, de la création de votre identité
                graphique ou de votre site internet, ainsi que de l’inauguration d’une nouvelle structure…</p>
            <p>Nous sommes là pour vous proposer des idées nouvelles, mêlant tous les canaux de communication.</p>
            <!-- Fin de série paragraphe 1 -->

            <!-- Début Screens écrans -->
            <div id="screens">
                <div class="small-screen-left">
                    <img src='{{asset("img/small_left_screen.png")}}' alt="" id="img1">
                </div>
                <div class="small-screen-right">
                    <img src='{{asset("img/small_right_screen.png")}}' alt="" id="img2">
                </div>
                <div class="big-screen">
                    <img src='{{asset("img/big_screen.png")}}' alt="" id="img3">
                </div>
            </div>
            <!-- Fin Screens écrans -->
        </div>
    </section>
    <!-- Fin section 1 -->

    <!-- ------------------------------------------------------------------------------------------------------------------------- -->

    <!-- Début section 2 -->
    <section>
        <div class="container">
            <!--Titre Section 2 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 id="titre2">
                        L’ÉQUIPE ET SES STUDIOS
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Fin Titre Section 2 -->

            <img src='{{asset("img/logo-pure-noir-2018.png")}}' alt="" class="pt-3">
            <div class="row pt-5">
                <div class="col-12">
                    <img src='{{asset("img/equipe-photo-5.jpg")}}' alt="" class="photoéquipe">
                </div>
            </div>
        </div>
    </section>
    <!-- Fin section 2 -->

    <!-- ---------------------------------------------------->

    <!-- Début petit background -->
    <div class="row">
        <div class="col-12" id="bgpetit">
            <div class="filtre">

            </div>
            <div class="container" id="containerbgpetit">
                <h1 id="h1bg">
                    "NOUS VOUS ACCOMPAGNONS DANS LA RÉFLEXION ET LA RÉALISATION DE VOTRE COMMUNICATION"
                </h1>
                <p id="parabg">
                    - Agence Pure -
                </p>
            </div>
        </div>
    </div>
    <!-- Fin petit background -->

    <!-- --------------------------------------------------- -->

    <!-- Début section 3 -->

    <section class="mb-5">
        <div class="container">
            <!-- Début titre section 3 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 id="titreagencepure">
                        COMPÉTENCES
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Fin titre section 3 -->


            <!-- Début row1 dection 3 -->
            <div class="row pb-5">
                <div class="col-1">
                    <i class="fas fa-cogs text-light rounded-circle" id="iconcompet"></i>
                </div>


                <div class="col-11">
                    <div class="pl-5">
                        <h5 id="titrecompétence">
                            CONSEIL ET STRATÉGIE
                        </h5>
                        <p id="paracompétence">
                            Grâce à nos compétences internes c’est avec cohérence, que nous vous proposons des plans d’actions stratégiques en rapport
                            avec vos besoins. D’une stratégie de communication opérationnelle, à la campagne de lancement
                            de votre nouveau produit, en passant par la mise en place d’une stratégie de web marketing, c’est
                            ensemble que nous travaillons pour mettre en place un plan d’action cohérent en fonction de votre
                            positionnement et cible.
                        </p>
                    </div>

                </div>

            </div>
            <!-- Fin row 1 section 3 -->


            <!-- Début row 2 section 3 -->

            <div class="row pb-5">
                <div class="col-1">
                    <i class="fas fa-comments text-light rounded-circle" id="iconcompet"></i>
                </div>


                <div class="col-11">
                    <div class="pl-5">
                        <h5 id="titrecompétence">
                            ÉVENEMENTIEL
                        </h5>
                        <p id="paracompétence">
                            De par notre ancienneté, et notre réseau relationnel nous sommes secondés par des partenaires techniques qui nous autorisent
                            à pouvoir concrétiser toutes sortes de réalisations, adaptées à votre budget et à la nature de
                            votre évènement. Soirées ou journées portes ouvertes, inauguration de produits, soirées institutionnelles,
                            lancements commerciaux, agencements d’appartements témoins.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Fin row 2 section 3 -->


            <!-- Début row 3 section 3 -->

            <div class="row pb-5">
                <div class="col-1">
                    <i class="fas fa-tv text-light rounded-circle" id="iconcompet"></i>
                </div>


                <div class="col-11">
                    <div class="pl-5">
                        <h5 id="titrecompétence">
                            WEB
                        </h5>
                        <p id="paracompétence">
                            Toutes les solutions sont permises pour communiquer sur votre e-notoriété. Notre studio web se charge de mettre en place
                            un développement sur mesure pour vos e-projets. Grâce à nos compétences internes, nous vous proposons
                            des sites vitrines administrables, des solutions e-commerce, des applications smartphones, le
                            tout agrémenté d’une optimisation de votre référencement naturel ou payant.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Fin row 3 section 3 -->


            <!-- Début row 4 section 3 -->

            <div class="row pb-5">
                <div class="col-1">
                    <i class="fas fa-pencil-alt text-light rounded-circle" id="iconcompet"></i>
                </div>


                <div class="col-11">
                    <div class="pl-5">
                        <h5 id="titrecompétence">
                            3D ET PRINT
                        </h5>
                        <p id="paracompétence">
                            Chez Pure la 3D et le print ce n’est pas que des images, ou des créations graphiques, c’est aussi un panel d’applications
                            dédiées aux smartphones, ou tablettes numériques. Avec notre studio 3D-Print, nous vous proposons
                            une valeur ajoutée grâce à une utilisation très simple de la 3D temps réel, ou de la réalité
                            augmentée, qui sont d’incontournables outils d’aide à la vente. D’un film d’animation, à une
                            vidéo promotionnelle, en passant par la création de votre campagne de publicité, nous sommes
                            en mesure de vous proposer une prestation globale pour la création de tous vos supports visuels
                            qu’ils soient internes ou externes.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fin row 4 section 3 -->
        </div>
    </section>

    <!-- Fin section 3 -->

    <!-- ---------------------------------------------- -->

    <!-- Début section 4 -->
    <section class="section4">
        <div class="container">

            <!-- Début titre section 4 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 id="titreagencepure">
                        SERVICES
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Fin titre section 4 -->

            <ul class="ulservice">
                <li class="liservice">
                    <i class="fas fa-cogs text-dark" id="iconservice"></i>
                    <h5>
                        CONSEIL ET STRATÉGIE
                    </h5>
                    <p>
                        Stratégie • Plans de communication et médias • Audit • Web marketing • SMO • E-reputation
                    </p>
                </li>
                <li class="liservice">
                    <i class="fas fa-comments text-dark" id="iconservice"></i>
                    <h5>
                        ÉVÈNEMENTIEL
                    </h5>
                    <p>
                        Marketing opérationnel • Lancement commerciaux • Inauguration • salons • Soirées institutionnelles
                </li>
                <li class="liservice">
                    <i class="fas fa-tv text-dark" id="iconservice"></i>
                    <h5>
                        PRINT ET 3D
                    </h5>
                    <p>
                        Chartes graphiques • Logos • Campagnes publicitaires • Infographie • Réalité augmentée • 3D temps réel
                </li>
                <li class="liservice">
                    <i class="fas fa-pencil-alt text-dark" id="iconservice"></i>
                    <h5>
                        WEB
                    </h5>
                    <p>
                        Site vitrine • Site e-commerce • Applications Mobiles • Référencement naturel • Réseaux sociaux
                </li>
            </ul>


        </div>

    </section>
    <!-- Fin section 4 -->

    <!-- -------------------------------------------- -->

    <!-- Début section 5 -->

    <section>
        <div class="container">
            <!-- Début titre section 5 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 id="titreagencepure">
                        CLIENTS
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Début titre section 5 -->

            <img src='{{asset("img/logo-clients-1180x85.png")}}' alt="">

        </div>
    </section>

    <!-- Fin section 5 -->

    <!-- --------------------------------------------- -->

    <!-- Début section 6 -->

    <section class="pb-3" id="sectionportfolio">


        <div class="container">
            <!-- Début titre section 6 -->
            <div class="row" id="row1">
                <div class="col-8" id="titrepure">
                    <h1 class="text-white" id="titreportfolio">
                        PORTFOLIO
                    </h1>
                    <span id="span1">
                    </span>
                </div>
            </div>
            <!-- Début titre section 6 -->


            <div class="row">
                <div class="col-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 carouportfolio" src='{{asset("img/Capture du 2018-05-08 09-51-01.png")}}' alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carouportfolio" src='{{asset("img/Capture du 2018-05-08 09-53-28.png")}}' alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carouportfolio" src='{{asset("img/Capture du 2018-05-08 09-56-14.png")}}' alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carouportfolio" src='{{asset("img/Capture du 2018-05-08 09-58-36.png")}}' alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <img src='{{asset("img/trait_separation_by_lubianse-d4ansye.png")}}' alt="">
                <div class="col-5">

                </div>
            </div>
        </div>

    </section>

    <!-- FIn section 6 -->

    <!------------------------------------------------------------------------------------>
@endsection


    <!-- Fin section 7 -->

