@extends('head.header')

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('assets/img/PP.png')}}" alt="Ma photo de profile" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{route('welcome')}}">Stephane k. ATSU</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>À Propos</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                        <span>Parcours</span></a></li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-award"></i> <span>Compétences</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Réalisations</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=" background-image: url('assets/img/steph3.jpg')">
    <div class="hero-container" data-aos="fade-in">
        <h1>StephCV</h1>
        <p>Je suis un <span class="typed" data-typed-items="Développeur, Programmeur"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Section d'À Propos ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>À Propos</h2>
                <p>
                    StephCV est un site web qui vous fournit les informations nécéssaires sur moi, et sur mon expérience
                    professionnelle,<br> retrançant mon parcours ainsi que mes compétences, mes réalisations
                    et les services que je vous offre en tant que développeur.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset('assets/img/PP_about.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Programmeur &amp; Développeur Web/Mobile.</h3>
                    <p class="fst-italic">
                        Je suis un Développeur web et Programmeur.
                    </p><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Nom:</strong> <span>ATSU</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>18 Mai 2001</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Site web:</strong>
                                    <span>www.example.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Téléphone:</strong> <span>+228 96930181 / 91287906</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>LOMÉ, TOGO</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Prenom:</strong>
                                    <span>Koffi Stephane</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Âge:</strong> <span>21</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Niveau:</strong> <span>Licence Professionelle en Génie-Logiciel</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>stephaneatsu18@gmail.com</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                    <span>Disponible</span></li>
                            </ul>
                        </div>
                    </div>
                    <div><p>Innovateur, créactif et dynamique, mettre mon expérience et toutes mes compétences en faveur
                            de mon pays,
                            ma population et l'humanité est essentiel pour moi afin de permettre un développement
                            durable à travers le numérique.
                            Le travail en équipe est aussi l'une des notions très importante pour moi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- fin section d'à propos -->

    <!-- ======= Facts Section =======
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> End Facts Section -->

    <!-- ======= Section Parcours ======= -->
    <section id="resume" class="resume">

        <div class="container">
            <div class="section-title">
                <h2>Parcours</h2>
            </div>

            <!--Début cursus scolaire -->
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">

                    <!--Début pour cursus -->
                    <h3 class="resume-title text-success">Cursus Scolaire </h3>
                    <!--Début pour le CEPD -->
                    <div class="resume-item pb-0">
                        <h4>Certificat d'Étude du Premier Degré (CEPD)</h4>
                        <h5>2011 - 2012</h5>
                        <p><em>Obtenu à l'École Privé Laic Claude Barbier, Lomé.</em></p>
                    </div>
                    <br><!--Fin pour le CEPD --><br>

                    <!--Début pour le BEPC -->
                    <div class="resume-item pb-0">
                        <h4>Brevet d'Étude du Premier Cycle (BEPC)</h4>
                        <h5>2015 - 2016</h5>
                        <p><em>Obtenu au Lycée HÉDZRANAWOE, Lomé.</em></p>
                    </div>
                    <br><!--Fin pour le BEPC --><br>

                    <!--Début pour le BAC2 -->
                    <div class="resume-item pb-0">
                        <h4>Baccalauréat deuxième partie (BACII)</h4>
                        <h5>2018 - 2019</h5>
                        <p><em>Obtenu au Lycée HÉDZRANAWOE, Lomé.</em></p>
                    </div>
                    <br><!--Fin pour le BAC2 -->

                    <h3 class="resume-title text-success">Cursus universitaire</h3>
                    <!--Début pour le LICENCE -->
                    <div class="resume-item pb-0">
                        <h4>lICENCE PROFESSIONNELLE EN GÉNIE LOGICIEL</h4>
                        <h5>2022 - 2023</h5>
                        <p><em>Obtenue au Centre Informatique et de Calcul (CIC)<br> à l'Université de Lomé (UL)</em>
                        </p>
                    </div>
                    <br><!--Fin pour LICENCE --><br>
                </div><!--Fin pour cursus scolaire -->


                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title text-success">Expérience Professionnelle</h3>
                    <div class="resume-item">
                        <h4>Stage professionel</h4>
                        <h5>En cours</h5>
                        <p><em>Sagbado</em></p>
                        <ul>
                            <li>C'est mon premier stage professionel que j'effectue en tant que développeur.</li>
                            <li>Ce stage se déroule dams l'entreprise MediaSoft. MediaSoft met en place des applications web et mobile, des logiciels de microfinance,
                                pour plus d'information consulter <a href="https://www.mediasofthome.com/index.php">site officile MediaSoft</a>  
                            </li>
                            <li>Technologies étudiées : JEE, Android</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Expérience 2</h4>
                        <h5>Durée</h5>
                        <p><em>lieu</em></p>
                        <ul>
                            <li>Développement 1</li>
                            <li>Développement 2</li>
                            <li>Développement 3</li>
                            <li>Développement 4</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- fin section de parcours -->

    <!-- =======Compétence Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Compétences</h2>
            </div>
            <div class="section-title">
                Il s'agit des maîtrises que j'ai dans le domaine
            </div>
            <!--<div class="row skills-content  text-center">
                <div class="col-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">HTML</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>
                <div class="col-3" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="font-weight: bold;">CSS</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

                <div class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">Java Script</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

                <div class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">C++</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

            </div>-->
            <div>
            <table>
            <tr class="row skills-content  text-center">
                <td class="col-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">HTML</h3>
                                </td>
                <td class="col-3" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="font-weight: bold;">CSS</h3>
                    </td>

                <td class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">Java Script</h3>
                    </td>

                <td class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">JEE</h3>
                    </td>

            </tr>
            </table></div>

            <div class="row skills-content  text-center">
                <div class="col-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">C</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>
                <div class="col-3" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="font-weight: bold;">PHP</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

                <div class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">LARAVEL</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

                <div class="col-lg-3" data-aos="fade-up">
                    <h3 style="font-weight: bold;">BOOTSTRAP</h3>
                    <img src="{{asset('assets/img/')}}" alt="">
                </div>

            </div>

        </div>
    </section><!--Fin Secton de Compétences -->


    <!-- ======= Réalisations Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Réalisations</h2>
                <p>
                    Découvrez certaines de nos réalisations sur des projets sur lesquels on a eu à travailler.
                </p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="InTOGO"><i class="bx bx-plus">InTOGO</i></a>
                            <a href="{{route('intogo')}}" title="Plus de détails"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="DMPR"><i class="bx bx-plus">DMPR</i></a>
                            <a href="{{route('dmpr')}}" title="Plus de détails"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="StephCV"><i class="bx bx-plus">StephCV</i></a>
                            <a href="{{route('welcome')}}" title="Plus de détails"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="app 1"><i class="bx bx-plus">APP1</i></a>
                            <a title="Plus de détails"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- Fin Section de Réalisations-->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <br>Avec une équipe dynamique a mes côtés, nous vous offrons de différents services<br> afin de
                satisfaire vos bésoins dans plusieurs domaines et de façons pertinantes.<br>
                N'hésitez pas à me consulter.
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-pc-display-horizontal"></i></div>
                    <h4 class="title"><span>Création de site web</span></h4>
                    <p class="description">Vous avez bésoin d'un site web pous vos bésoins ou pour<br> promouvoir vos
                        produits? On vous met à votre disposition,<br> un site web conformement à vos bésoins et
                        exigences.</p>
                </div>

                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-server"></i></div>
                    <h4 class="title"><span>Maintenance informatique</span></h4>
                    <p class="description">Pour tous vos appareils informatiques qui sont en panne et qui ont bésoin
                        d'être remis dans leur état optimal, Ne vous inquitez plus nous vous offrons des services de
                        maintenance à la hauteur de la qualité. </p>
                </div>

                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bxl-android"></i></div>
                    <h4 class="title "><span>Création d'application mobile</span></h4>
                    <p class="description">Nous mettons à votre disposition des applications mobiles<br> pour tous vos
                        bésoins et conformement à vos exigences.</p>
                </div>

                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-server"></i></div>
                    <h4 class="title"><span>Mise en place de systèmes et réseaux informatiques</span></h4>
                    <p class="description">On vous met en place des systèmes réseaux informatiques qualifiés.</p>
                </div>

            </div>

        </div>
    </section><!-- Fin Services Section -->

    <!-- ======= Notre équipe ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Mon équipe</h2>
                <p>C'est une équipe dynamique, créatrice et innovatrice. Découvrez-nous!</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                dynamique et bosseur
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets/img/user.png')}}" class="testimonial-img" alt="">
                            <h3>Emanuel Kodjo ASSOUM</h3>
                            <h4>Technicien en SRI</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                dynamique et bosseur
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets/img/user.png')}}" class="testimonial-img" alt="">
                            <h3>Tabitha KARL</h3>
                            <h4>Programmeur & Développeur Web</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                dynamique et bosseur
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset('assets/img/user.png')}}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Web designer</h4>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- Fin section pour équipe -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address py-3">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localité:</h4>
                            <p>Akato-Viépe, sur la route de Segbé, Lomé</p>
                        </div>

                        <div class="email py-3">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>stephaneatsu18@gmail.com</p>
                        </div>

                        <div class="phone py-3">
                            <i class="bi bi-phone"></i>
                            <h4>Appeler:</h4>
                            <p>
                                +228 96 93 01 81<br>
                                +228 91 28 79 06
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form method="POST"  action="{{route('message')}}" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Votre nom</label>
                                <input type="text" name="name" id="name" class="rounded-3 form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required>
                                <div class=" alert-danger" style="color:red">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Votre email</label>
                                <input type="email" name="email" id="email" class="rounded-3 form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required>
                                <div class=" alert-danger" style="color:red">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <span class="text-success font-monospace">( *** Le sujet doit contenir au moins 3 caractères ***)</span>
                            <input type="text" name="sujet" id="sujet" class="form-control @error('sujet') is-invalid @enderror" value="{{old('sujet')}}" required>
                            <div class=" alert-danger" style="color:red">
                                @error('sujet')
                                {{ $message }}
                                @enderror
                            </div>
                        </div> <br><br>

                        <div class="form-group">
                            <label>Message</label>
                            <span class="text-success font-monospace">( *** Le message doit contenir au moins 5 caractères ***)</span>
                            <textarea name="messages" id="messages" class="form-control @error('messages') is-invalid @enderror" rows="10" value="{{old('messages')}}" required></textarea>
                            <div class=" alert-danger" style="color:red">
                                @error('messages')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <!--<div class="my-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>-->

                        <div class="text-center">
                            <button type="submit" class="btn btn-success" >Envoyer votre message</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<!-- ======= Footer =======
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>iPortfolio</span></strong>
    </div>
    <div class="credits">
      <-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ ->
Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
</footer> <-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
