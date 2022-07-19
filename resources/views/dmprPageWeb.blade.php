@extends('head.header')

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

@include('nav.menu')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>DMPR</h2>
                <ol>
                    <li><a href="{{route('welcome')}}"><button class="rounded">Retour à l'accueil</button></a></li>
                    <li>Détails sur DMPR</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informations sur DMPR</h3>
                        <ul>
                            <li><strong>Catégorie</strong>: Site Web</li>
                            <li><strong>Date de création</strong>: 20 Mars 2021</li>
                            <li><strong>URL du site</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Ceci est un exemple de détails sur DMPR</h2>
                        <p>
                            <strong>DMPR <i>(Diagnostic des Maladies et Prise de Rendez-vous)</i></strong> est une plateforme web dont le but
                            est de renseigner les utulisteurs sur des pathologies et qui offre la possibilté de faire
                            une demande de prise de rendez-vous chez un Docteur de son choix appartenant à un centre de santé.

                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">

        </div>
        <div class="credits">

        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

